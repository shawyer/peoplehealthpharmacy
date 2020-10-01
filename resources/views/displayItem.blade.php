@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$item->Item_Name}}</h1>
    <ul>
        <li>Items Remaining: {{$item->Item_Remaining}}</li>
        <li>Orders
            <ul>
                @foreach ($item->Sales as $itemSale)
                    <li> <i>{{$itemSale->created_at}}</i>: <b>{{$itemSale->Item_Sold}}</b></li>
                @endforeach
            </ul>
        </li>
    </ul>
    </div>
@endsection