<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Sale;
use App\Models\ItemSale;
use Illuminate\Http\Request;
use DB;
class GetController extends Controller
{
  public function get(Request $request) {
    $saleId=(int)$request->input('saleId');//get sale id
    $sale=Sale::where('id',$saleId)->first();//get the sale record
    $itemSales=ItemSale::where("Sales_Id",$saleId)->get();//get all itemsale record
    $itemsolds=array();
    foreach($itemSales as $itemSale)
    {
      $itemid=$itemSale['Items_Id'];//get item id from itemsale record
      $item=Item::where('id',$itemid)->first();
      $itemsold=array();
      $itemsold['Item_Name']=$item['Item_Name'];
      $itemsold['Item_Sold']=$itemSale['Item_Sold'];
      $itemsolds[]=$itemsold;
    }
    return view("Salerecord",compact('saleId','itemsolds')); // head to confirmation page.
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
