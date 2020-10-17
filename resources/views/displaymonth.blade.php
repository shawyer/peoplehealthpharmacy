@extends('layouts.app')

@section('content')
<div class="container">
   <form method="post" action="{{route('display-month')}}">
   {{csrf_field()}}
   <label>Sort </label>
   <input type="text" name="sort" placeholder="a/d"><br>
   <label>Criteria</label>
   <input type="text" name="Criteria" placeholder="name/date/qty"><br>

   <button type="submit" text="submit" value="submit"> Submit </button>
</form>
</div>
@endsection
