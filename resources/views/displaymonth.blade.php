@extends('layouts.app')

@section('content')
<div class="container">

  <form method="post" action="{{route('display-month')}}">
   {{csrf_field()}}
    <input type="radio" name="sort" value="a" id="sortA"/>
    <label for="sortA" id="sortla">Asc</label><br>
    <input type="radio" name="sort" value="d" id="sortD"/>
    <label for="sortD" id="sortld">Desc</label><br>

    <select name="Criteria" id="dropdownMenu">
        <option value="qty">Quantity</option>
        <option value="name">Item</option>
        <option value="date">Date</option>
    </select>
    <input type="text" placeholder="(optional)" name="filter" id="ItemNameInput">
    <button type="submit" text="submit" value="submit"> Submit </button>
  </form>

</div>
@endsection
