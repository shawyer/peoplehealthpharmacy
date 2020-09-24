<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Sale;
use App\Models\ItemSale;
use Illuminate\Http\Request;
use DB;
class AddController extends Controller
{
    public function submit(Request $request) { 
        $Item = new Item(); //Create new item
        $Item->Item_Name = $request->input("Item_Name"); // set item name
        $Item->Item_Remaining = $request->input("Item_Remaining"); // set item qty remaining 
        $Item->save(); //push to table
        return view("confirmation"); // head to confirmation page. 
    }
    public function sale(Request $request) {
        $Sale = new Sale(); // Create new sale and place timestamps 
        $Sale->save();
        $Item = $request->input("Item_Name"); // get item name
        $ItemId = Item::where('Item_Name', $Item)->first(); // Get the item name's record
        $ItemId->Item_Remaining -= (int)$request->input("Qty"); // remove the amount from the item stock
        $ItemId->save(); 
        $ItemId = $ItemId->getKey(); // get the item id
        $ItemSale = new ItemSale(); // create a new itemsale
        $ItemSale->Sales_Id = $Sale->getKey(); // get the sale id
        $ItemSale->Item_Sold = $request->input("Qty"); // get the qty being sold
        $ItemSale->Items_Id = $ItemId; // set the id of the item in itemsale
        $ItemSale->save(); // push to table
        return view("confirmationSale"); // head to confirmation page 
    }
    public function index(Request $request) {
      return view("welcome");
    }
}
