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
        $Item = $request->input('Item_Name');
        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
      //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
        ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/30)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/30)) as quantity2'),"itemsale.Items_Id")->groupBy("itemsale.Items_Id")
        ->where("items.Item_Name",$Item)
        ->whereMonth('sales.created_at', Carbon::now()->month)->get();
        return view ('displayItemPredictionM', compact('monthSales'));
    }
    public function displayWeeklyPrediciton(Request $request) {
        Carbon::setWeekStartsAt(Carbon::MONDAY);
        Carbon::setWeekEndsAt(Carbon::SUNDAY);
        $Item = $request->input('Item_Name');
        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
        ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/7)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/7)) as quantity2'),"itemsale.Items_Id",)->groupBy("itemsale.Items_Id")
        ->where("items.Item_Name",$Item)
        ->whereBetween('sales.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        return view ('displayItemPredictionW', compact('monthSales'));
    }
    public function displayMonthlyCategoryPrediciton(Request $request) {
        $Item = $request->input('Item_Category');
        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
      //  ->select( DB::raw("count(itemsale.Items_id) as count"))->groupBy("itemsale.Items_id")->get();
        ->select( DB::raw('SUM(itemsale.Item_Sold+(itemsale.Item_Sold/30)) as quantity1'),DB::raw('SUM(itemsale.Item_Sold-(itemsale.Item_Sold/30)) as quantity2'),"items.Item_Category")->groupBy("items.Item_Category")
        ->where("items.Item_Category",$Item)
        ->whereMonth('sales.created_at', Carbon::now()->month)->get();
        return view ('displayItemPredictionCategoryM', compact('monthSales'));
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

