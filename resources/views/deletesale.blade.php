<div class="container">
   <form method="post" action="{{route('delete')}}">
   {{csrf_field()}}
   <label>Sale ID want to delete: </label>
   <input type="text" name="saleId"><br>
   <button type="submit" text="submit" value="submit"> Submit </submit>
</form>
</div>
