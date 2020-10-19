@extends('layouts.app')

@section('content')
<h1>Display This Weeks Sales</h1>
<div class="container">
    @foreach ($weekSales as $weekSale)
        <ul>
            <li>Sale Date: {{$weekSale->created_at}}</li>
            <li>Item Name: {{$weekSale->Item_Name}}</li>
            <li>Total Sold: {{$weekSale->Item_Sold}}</li>
        </ul>
    @endforeach
</div>
@endsection