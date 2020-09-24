@extends('layouts.app')

@section('content')
<h1>Hey</h1>
<div class="container">
    @foreach ($items as $item)
        <li><a href={{route('displayItem', ['itemName'=>$item->Item_Name])}}>{{$item->Item_Name}}</a></li>
    @endforeach
</div>
@endsection