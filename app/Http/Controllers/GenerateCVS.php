<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class GenerateCVS extends Controller
{
    public function GenerateCVS(){
        $monthSales = DB::table('sales')
        ->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')
        ->join('items','itemsale.Items_Id', '=', 'items.id')
        ->select('items.Item_Name', 'items.Item_Remaining', 'itemsale.Item_Sold', 'sales.created_at', 'items.id as items_id', 'itemsale.Items_Id as itemsale_item_id')
        ->whereMonth('sales.created_at', Carbon::now()->month)->get();
        
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($monthSales, ['Item_Name', 'Item_Remaining', 'Item_Sold', 'created_at', 'items_id', 'itemsale_item_id']);
        $csvExporter->download('month_sales.csv');
    }
}
