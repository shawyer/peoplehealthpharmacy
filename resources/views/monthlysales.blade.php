@extends('layouts.app')

@section('content')
<h1>Display Monthly Sales</h1>
<div class="container">
    @foreach ($monthSales as $monthSale)
        <ul>
            <li>Sale Date: {{$monthSale->created_at}}</li>
            <li>Item Name: {{$monthSale->Item_Name}}</li>
            <li>Total Sold: {{$monthSale->Item_Sold}}</li>
        </ul>
    @endforeach
</div>
@endsection