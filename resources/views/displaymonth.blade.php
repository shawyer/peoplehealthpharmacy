@extends('layouts.app')

@section('content')
<div class="container" id="hidedis">

  <form method="post" name = "initial_submit" action="{{route('display-month')}}">
   {{csrf_field()}}
    <input type="radio" name="sort" value="a" id="sortA" hidden="hidden"/>
    <input type="radio" name="sort" value="d" id="sortD" hidden="hidden" accept=""/>

    <select name="Criteria" id="dropdownMenu" hidden="hidden">
        <option value="qty"></option>
        <option value="name"></option>
        <option value="date"></option>
    </select>
    <input type="text" placeholder="(optional)" name="filter" id="ItemNameInput" hidden="hidden">
    <button type="submit" text="submit" value="submit" hidden="hidden"> Submit </button>

  </form>

</div>
<script>
  window.onload = function(){
    document.forms['initial_submit'].submit();
    myFunction();
    }

    function myFunction() {
  var x = document.getElementById("hidedis");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
@endsection
