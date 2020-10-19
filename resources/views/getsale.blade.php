
<div class="container">
   <form method="post" action="{{route('get')}}">
   {{csrf_field()}}
   <label>Sale ID </label>
   <input type="text" name="getSaleId"><br>
   <button type="submit" text="submit" value="submit"> Submit </submit>
</form>
</div>
