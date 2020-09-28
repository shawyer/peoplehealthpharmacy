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
        #$item = DB::table('items')->('Item_Name', '=', $itemName);
        $item = \App\Models\Item::all()->firstWhere('Item_Name', $itemName);
        return view ('displayItem', compact('item'));
    }

    public function displayMonthlyItems(){
        $monthSales = DB::table('sales')->join('itemsale','sales.id', '=', 'itemsale.Sales_Id')->join('items','itemsale.Items_Id', '=', 'items.id')->whereMonth('sales.created_at', Carbon::now()->month)->get();
        #$monthSales = \App\Models\Sale::all();
        #dd($monthSales);
        return view ('monthlysales', compact('monthSales'));
    }

}
