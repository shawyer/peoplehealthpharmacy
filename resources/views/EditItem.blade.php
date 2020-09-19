
<div class="container">
   <form method="post" action="{{route('EditItem')}}">
   {{csrf_field()}}
   <label> Change Item Name </label> </br>
   <input type="text" name="Item_Names" placeholder="From"> </br>
   <input type="text" name="Item_Name_Change" placeholder="To"> </br>
   <button type="submit" text="submit" value="Change"> Change </button> </br>
   </form>

   <form method="post" action="{{route('EditItemQuantity')}}">
   {{csrf_field()}}
   <label> Change Item Qty </label> </br>
   <input type="text" name="Item_Name_Quantity" placeholder="Item Quantity to Change"> </br>
   <select name="operation" id="operation"></br>
  <option value="remove">remove</option>
  <option value="add">add</option>
</select></br>
   <input type="text" name="Item_Quantity" placeholder="Number to add or remove"> </br>
   <button type="submit" text="submit" value="Change"> Change </button> </br>
</form>

<form method="post" action="{{route('EditItemSaleAmount')}}">
   {{csrf_field()}}
   <label> Change Order Amount Sold </label> </br>
   <input type="text" name="SaleID" placeholder="The ItemSale Id"> </br>
   <input type="text" name="Item_Quantity_Change" placeholder="Amount Sold"> </br>
   <button type="submit" text="submit" value="Change"> Change </button> </br>
</form>
</div>
