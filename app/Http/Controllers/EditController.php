<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Sale;
use App\Models\ItemSale;
use Illuminate\Http\Request;
use DB;
class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function EditItem(Request $request) {
        $Item = $request->input('Item_Names');
        $ItemId = Item::where("Item_Name", $Item)->first(); // Get the item name's record
        $ItemId->Item_Name = $request->input("Item_Name_Change");
        $ItemId->save(); //push to table
        return view("confirmation"); // head to confirmation page.
    }
    public function EditItemQuantity(Request $request) {

        $Item = $request->input('Item_Name_Quantity');
        $ItemId = Item::where("Item_Name", $Item)->first(); // Get the item name's record
        if($request->input('operation') == "remove") {
            $ItemId->Item_Remaining  -= (int)$request->input("Item_Quantity");
        }
        else {
            $ItemId->Item_Remaining  += (int)$request->input("Item_Quantity");
        }
        $ItemId->save(); //push to table
        return view("confirmation"); // head to confirmation page.
    }
    public function EditItemSaleAmount(Request $request) {

        $ItemSale = (int)$request->input('SaleID');
        $ItemSaleNew = ItemSale::where("id", $ItemSale)->first(); // Get the item name's record
        $ItemSaleNew->Item_Sold = (int)$request->input('Item_Quantity_Change');
        $ItemSaleNew->save();
        return view("confirmation");
    }
    public function index(Request $request) {
      return view("welcome");
    }
    //destroy()
}
