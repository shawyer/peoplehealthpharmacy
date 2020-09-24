
<div class="container">
   <form method="post" action="{{route('sale')}}">
   {{csrf_field()}}
   <label> Items sold </label>
   <input type="text" name="Item_Name"><br>
   <label> Amount Sold </label>
   <input type="text" name="Qty"><br>
   <button type="submit" text="submit" value="submit"> Submit </submit>
</form>
</div>

