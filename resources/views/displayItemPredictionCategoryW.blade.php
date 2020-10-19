@extends('layouts.app')

@section('content')
<div class="container">
 <div class="container">
 @foreach ($monthSales as $monthSale)
        <ul>
            <li>Category Positive Projection: {{round($monthSale->quantity1)}}</li>
            <li>Category Negative Projection: {{round($monthSale->quantity2)}}</li>
        </ul>
    @endforeach
</div>
@endsection