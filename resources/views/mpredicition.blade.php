
<div class="container">
   <form method="post" action="{{route('monthly')}}">
   {{csrf_field()}}
   <label> Sales Prediction of Item </label>
   <input type="text" name="Item_Name"><br>
   <button type="submit" value="submit"> Submit </submit>
</form>
</div>

