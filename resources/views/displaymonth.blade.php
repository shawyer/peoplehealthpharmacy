@extends('layouts.app')

@section('content')
<div class="container">
   <form method="post" action="{{route('display-month')}}">
   {{csrf_field()}}
   <label>Sort </label>
   <input type="text" name="sort" placeholder="a/d"><br>
   <label>Criteria</label>
   <input type="text" name="Criteria" placeholder="name/date/qty"><br>
   <!-- replace criteria and sort using option / select-->
   <label>Filter itemName</label>
   <input type="text" name="filter" placeholder="item Name"><br>

   <button type="submit" text="submit" value="submit"> Submit </button>
</form>
</div>
@endsection
