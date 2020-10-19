@extends('layouts.app')

@section('content')
<h1>Hey</h1>
<div class="container">
  <table border="1px">
    <tr><td>Item Name</td><td>Total Sold</td><td>Sale Date</td></tr>
    @foreach ($monthSales as $monthSale)
        <tr>
            <td> {{$monthSale->Item_Name}}</td>
            <td> {{$monthSale->Item_Sold}}</td>
            <td> {{$monthSale->created_at}}</td>
        </tr>
    @endforeach
  </table>
</div>
@endsection
