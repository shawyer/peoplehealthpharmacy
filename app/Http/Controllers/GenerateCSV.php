<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class GenerateCSV extends Controller
{
    public function GenerateCSV(){
        /*$monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        ->select('items.Item_Name', 'items.Item_Remaining', 'itemsale.Item_Sold', 'sales.created_at', 
        'items.id as items_id', 'itemsale.Items_Id as itemsale_item_id', 'sales.created_at as sold')
        ->groupBy("Item_Name")
        ->get();


        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        ->select('items.Item_Name', 'items.Item_Remaining', 'itemsale.Item_Sold', 'sales.created_at', 
        'items.id as items_id', 'itemsale.Items_Id as itemsale_item_id', 'sales.created_at as sold')
        ->get()
        ->groupBy(function($date){
            return Carbon::parse($date->created_at)->format('m');
        }, 'item.Item_Name');*/

        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        ->select('items.Item_Name', 'items.Item_Remaining', DB::raw('SUM(itemsale.Item_Sold) as Total_Sold'), 'sales.created_at', 
        'items.id as items_id', 'itemsale.Items_Id as itemsale_item_id', 'sales.created_at as sold')
        ->groupBy(DB::raw("DATE_FORMAT(sales.created_at, '%Y-%m-%d')"), 'items.Item_Name')
        ->get();



        /*$monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        ->select('items.Item_Name')
        ->whereMonth('sales.created_at', Carbon::now()->month)
        ->get()
        ->groupBy(function($date){
            return Carbon::parse($date->created_at)->format('d');
        });*/

        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($monthSales, ["Item_Name" => "Product Name", "Total_Sold" => "Amount Sold", "created_at" => "Sell Date", "Item_Remaining" => "Product Total"]);
        $csvExporter->download('month_sales.csv');
    }
}
