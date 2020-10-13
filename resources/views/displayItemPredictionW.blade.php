@extends('layouts.app')

@section('content')
<div class="container">
 <div class="container">
 @foreach ($monthSales as $monthSale)
        <ul>
            <li>Item Id Count: {{round($monthSale->quantity1)}}</li>
            <li>Item Id Count: {{round($monthSale->quantity2)}}</li>
            <li>Item Id: {{$monthSale->Items_Id}}</li>
         
        </ul>
    @endforeach
</div>
@endsection