
<div class="container">
   <form method="post" action="{{route('submit')}}">
   {{csrf_field()}}
   <label> Item to add </label>
   <input type="text" name="Item_Name"><br>
   <label> Amount of item in stock </label>
   <input type="text" name="Item_Remaining"><br>
   <button type="submit" value="submit"> Submit </submit>
</form>
</div>

