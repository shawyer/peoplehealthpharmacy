@extends('layouts.app')
@section('title')
Monthly Sales
@endsection
@section('css')
   <link href="{{asset('css/Reports.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavmonthly')
@endsection
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
