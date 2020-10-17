<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class DisplayController extends Controller
{
    public function __construct()
    {
        #$this->middleware('auth');
    }

    public function getItems(){
        $items = \App\Models\Item::all();
        return view('displayItems', compact('items'));
    }

    public function displayItemInfo($itemName){
        #$items = DB::table('items')->join('itemsale','items.id','=', 'itemsale.Items_Id');
        $item = \App\Models\Item::all()->firstWhere('Item_Name', $itemName);
        return view ('displayItem', compact('item'));
    }

  public function displayMonthlyItems(Request $request){
        //$order=$request->input('sort');
        //$sort=$request->input('Criteria');
        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        ->select('items.Item_Name', 'items.Item_Remaining', 'itemsale.Item_Sold', 'sales.created_at')
        //->order('itemsale.Item_Sold')
        ->whereMonth('sales.created_at', Carbon::now()->month)->get();
        #$monthSales = \App\Models\Sale::all();
        #dd($monthSales);
        $sort='qty';//'name''date';'qty';
        $order='d';//'a''d';
        $monthSales=$this->sortbyQty($order,$monthSales);

        if($sort=='name')
        {
          $monthSales=$this->sortbyName($order,$monthSales);
        }
        else if($sort=='qty') {
          $monthSales=$this->sortbyQty($order,$monthSales);
        }
        else if($sort=='date'){
          $monthSales=$this->sortbyDate($order,$monthSales);
        }


        return view ('monthlysales', compact('monthSales'));
    }


    public function sortbyName($order,$array)
    {
      $size=count($array);
      if($order=='a')
      {
        for($i=0;$i<$size;$i++)
        {
          for($j=0;$j<$size-1;$j++)
          {
            if($array[$j]->Item_Name>$array[$j+1]->Item_Name)
            {
              $temp=$array[$j];
              $array[$j]=$array[$j+1];
              $array[$j+1]=$temp;
            }
          }
        }
      }else if($order=='d')
      {
        for($i=0;$i<$size;$i++)
        {
          for($j=0;$j<$size-1;$j++)
          {
            if($array[$j]->Item_Name<$array[$j+1]->Item_Name)
            {
              $temp=$array[$j];
              $array[$j]=$array[$j+1];
              $array[$j+1]=$temp;
            }
          }
        }
      }
      return $array;
    }

    public function sortbyDate($order,$array)
    {
      $size=count($array);
      if($order=='a')
      {
        for($i=0;$i<$size;$i++)
        {
          for($j=0;$j<$size-1;$j++)
          {
            if($array[$j]->created_at>$array[$j+1]->created_at)
            {
              $temp=$array[$j];
              $array[$j]=$array[$j+1];
              $array[$j+1]=$temp;
            }
          }
        }
      }else if($order=='d')
      {
        for($i=0;$i<$size;$i++)
        {
          for($j=0;$j<$size-1;$j++)
          {
            if($array[$j]->created_at<$array[$j+1]->created_at )
            {
              $temp=$array[$j];
              $array[$j]=$array[$j+1];
              $array[$j+1]=$temp;
            }
          }
        }
      }
      return $array;
    }

    public function sortbyQty($order,$array){
      $size=count($array);
      if($order=='a')
      {
        for($i=0;$i<$size;$i++)
        {
          for($j=0;$j<$size-1;$j++)
          {
            if($array[$j]->Item_Sold>$array[$j+1]->Item_Sold)
            {
              $temp=$array[$j];
              $array[$j]=$array[$j+1];
              $array[$j+1]=$temp;
            }
          }
        }
      }else if($order=='d')
      {
        for($i=0;$i<$size;$i++)
        {
          for($j=0;$j<$size-1;$j++)
          {
            if($array[$j]->Item_Sold<$array[$j+1]->Item_Sold)
            {
              $temp=$array[$j];
              $array[$j]=$array[$j+1];
              $array[$j+1]=$temp;
            }
          }
        }
      }
      return $array;
    }
}
