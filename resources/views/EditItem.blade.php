@extends('layouts.app')
@section('title')
AddSales
@endsection
@section('css')
   <link href="{{asset('css/modifysales.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavmodify')
@endsection
@section('content')

   <img src="../Assets/Modify Sales Assets/modify sale.png" alt="" width = "165" height="35" id="modifytitle"/>
    <img src="../Assets/Modify Sales Assets/search background.png" alt="" width = "715" height="380" id="searchbackground"/>
    <img src="../Assets/Modify Sales Assets/delete background.png" alt="" width = "715" height="380" id="deletebackground"/>
    <img src="../Assets/Modify Sales Assets/Edit Background.png" alt="" width = "850" height="850" id="editbackground"/>
    <img src="../Assets/Modify Sales Assets/Item.png" alt="" width = "800" height="180" id="itembackground"/>
    <img src="../Assets/Modify Sales Assets/Quantity.png" alt="" width = "800" height="180" id="quantitybackground"/>
    <img src="../Assets/Modify Sales Assets/Order Amount.png" alt="" width = "800" height="180" id="orderbackground"/>

   <div class="container">

      <form method="post" action="{{route('get')}}" class="submit_form">
         {{csrf_field()}}
         <input type="text" name="getSaleId" id="sSales">
         <button type="submit" text="submit" value="submit" class="large_buttons" id="submit_search"> Search </button>
      </form>
      <!--
      <form method="post" action="{{route('delete')}}" class="submit_form">
         {{csrf_field()}}
         <input type="text" name="deleteSaleId" id="sDelete" placeholder="Enter Sales I.D" >
         <button type="submit" text="submit" value="submit" class="large_buttons" id="submit_delete"> Submit </button>
      </form>
-->
      <form method="post" action="{{route('EditItem')}}" class="submit_form">
         {{csrf_field()}}
         <input type="text" name="Item_Names" placeholder="From" id="Item_Names" >
         <input type="text" name="Item_Name_Change" placeholder="To" id="Item_Names_Change">
         <button type="submit" text="submit" value="Change" class="small_buttons" id="Change_Name"> Change </button>
      </form>

      <form method="post" action="{{route('EditItemQuantity')}}" class="submit_form">
         {{csrf_field()}}
         <input type="text" name="Item_Name_Quantity" placeholder="Item Quantity to Change" id="Item_Name_Quantity">
         <select name="operation" id="operation">
            <option value="remove">remove</option>
            <option value="add">add</option>
         </select>
         <input type="text" name="Item_Quantity" placeholder="Number to add or remove" id="Item_Quantity">
         <button type="submit" text="submit" value="Change" class="small_buttons" id="Change_Quantity"> Change </button>
      </form>

      <form method="post" action="{{route('EditItemSaleAmount')}}" class="submit_form">
         {{csrf_field()}}
         <input type="text" name="SaleID" placeholder="The ItemSale Id" id="SaleID">
         <input type="text" name="Item_Quantity_Change" placeholder="Amount Sold" id="Item_Quantity_Change" >
         <button type="submit" text="submit" value="Change" class="small_buttons" id="Change_Order"> Change </button>
      </form>

   </div>

   {{-- <!--Three forms go here-->
  <form action="" method="post" class="submit_form">
    <input type="text" id="sSales" name="sSales" placeholder="Enter Sales I.D" >
    <input type="submit" value="Submit" class="large_buttons" id="submit_search">
  </form>
  <form action="" method="post" class="submit_form">
    <input type="text" id="sDelete" name="sDelete" placeholder="Enter Sales I.D" >
    <input type="submit" value="Submit" class="large_buttons" id="submit_delete">
  </form>

  <!--Mega Final forms go here-->
  <form method="post" action="" class="submit_form">
    <input type="text" name="Item_Names" id="Item_Names" placeholder="From">
    <input type="text" name="Item_Name_Change" id="Item_Names_Change" placeholder="To">
    <button type="submit" text="submit" value="Change" class="small_buttons" id="Change_Name"> Change </button>
  </form>

  <form method="post" action="" class="submit_form">
    <input type="text" name="Item_Name_Quantity" id="Item_Name_Quantity" placeholder="Item Quantity to Change">
    <select name="operation" id="operation">
      <option value="remove">remove</option>
      <option value="add">add</option>
    </select>
    <input type="text" name="Item_Quantity" id="Item_Quantity" placeholder="Number to add or remove">
    <button type="submit" text="submit" value="Change" class="small_buttons" id="Change_Quantity"> Change </button>
  </form>

  <form method="post" action="" class="submit_form">
    <label> Change Order Amount Sold </label>
    <input type="text" name="SaleID" id="SaleID" placeholder="The ItemSale Id">
    <input type="text" name="Item_Quantity_Change" id="Item_Quantity_Change" placeholder="Amount Sold">
    <button type="submit" text="submit" value="Change" class="small_buttons" id="Change_Order"> Change </button>
  </form> --}}
@endsection
