<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Sale;
use App\Models\ItemSale;
use Illuminate\Http\Request;
use DB;

class DeleteController extends Controller
{
    public function delete(request $request)
    {
      $saleId=(int)$request->input('deleteSaleId');
      $sale=Sale::where('id',$saleId)->first();
      $itemSales=ItemSale::where("Sales_Id",$saleId)->get();//get all itemsale record
      $itemsolds=array();
      foreach($itemSales as $itemSale)
      {
        $itemid=$itemSale['Items_Id'];//get item id from itemsale record
        $item=Item::where('id',$itemid)->first();
        $item->Item_Remaining+=$itemSale['Item_Sold'];// increase the itemsale
        $item->save();
        $itemSale->destroy($itemSale['id']);
      }
      if(!empty($sale))
      {
        $sale->destroy($sale['id']);
        $result="Delete Successfully";
      }
      else {
        $result="Id could not be found";
      }

      return view("deleterecord",compact('result')); // head to confirmation page.
    }

    public function index(Request $request) {
      return view("welcome");
    }
}
