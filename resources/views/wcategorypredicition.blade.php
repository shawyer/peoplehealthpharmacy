
<div class="container">
   <form method="post" action="{{route('monthlyW')}}">
   {{csrf_field()}}
   <label> Sales Prediction of Category</label>
   <input type="text" name="Item_Category"><br>
   <button type="submit" value="submit"> Submit </submit>
</form>
</div>

