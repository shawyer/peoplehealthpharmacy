<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

}
