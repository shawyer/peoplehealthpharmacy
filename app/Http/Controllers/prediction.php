<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Sale;
use App\Models\ItemSale;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class prediction extends Controller
{
    public function displayMonthlyPrediciton(Request $request) {
        if($request->input("Item_Name") != "") {
            $Item = $request->input('Item_Name');
            $monthSales = DB::table('sales')
            ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
            ->join('items','itemsale.Items_Id', '=', 'items.id')
          //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
            ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/30)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/30)) as quantity2'),"itemsale.Items_Id")->groupBy("itemsale.Items_Id")
            ->where("items.Item_Name",$Item)
            ->whereMonth('sales.created_at', Carbon::now()->month)->get();
        }
       
        if($request->input("Item_Category") != "") {
            $Item2 = $request->input('Item_Category');
            $monthSales2 = DB::table('sales')
            ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
            ->join('items','itemsale.Items_Id', '=', 'items.id')
          //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
            ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/30)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/30)) as quantity2'),"items.Item_Category")->groupBy("items.Item_Category")
            ->where("items.Item_Category",$Item2)
            ->whereMonth('sales.created_at', Carbon::now()->month)->get();
        }
        if($request->input("Item_Name") != "" && $request->input("Item_Category") != "") {
        return view ('displayItemPredictionM', compact('monthSales','monthSales2'))  ;
        }
        else if ($request->input("Item_Name") != "") {
            return view ('displayItemPredictionM', compact('monthSales')) ;
        }
        else if ($request->input("Item_Category") != "") {
            return view ('displayItemPredictionM', compact('monthSales2'))  ;
        }
    }
    public function displayWeeklyPrediciton(Request $request) {
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);
        if($request->input("Item_Name") != "") {
        $Item = $request->input('Item_Name');
        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
        ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/7)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/7)) as quantity2'),"itemsale.Items_Id",)->groupBy("itemsale.Items_Id")
        ->where("items.Item_Name",$Item)
        ->whereBetween('sales.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        }
        if($request->input("Item_Category") != "") {
            $Item2 = $request->input('Item_Category');
            $monthSales2 = DB::table('sales')
            ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
            ->join('items','itemsale.Items_Id', '=', 'items.id')
            //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
            ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/7)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/7)) as quantity2'),"items.Item_Category")->groupBy("items.Item_Category")
            ->where("items.Item_Category",$Item2)
            ->whereBetween('sales.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        }
        if($request->input("Item_Name") != "" && $request->input("Item_Category") != "") {
            return view ('displayItemPredictionW', compact('monthSales','monthSales2'))  ;
            }
            else if ($request->input("Item_Name") != "") {
                return view ('displayItemPredictionW', compact('monthSales')) ;
            }
            else if ($request->input("Item_Category") != "") {
                return view ('displayItemPredictionW', compact('monthSales2'))  ;
            }
    }

    public function displayWeeklyCategoryPrediciton(Request $request) {
        Carbon::setWeekStartsAt(Carbon::MONDAY);
        Carbon::setWeekEndsAt(Carbon::SUNDAY);
        $Item = $request->input('Item_Category');
        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
        ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/7)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/7)) as quantity2'),"items.Item_Category")->groupBy("items.Item_Category")
        ->where("items.Item_Category",$Item)
        ->whereBetween('sales.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        return view ('displayItemPredictionCategoryW', compact('monthSales'));
    }
        
}

