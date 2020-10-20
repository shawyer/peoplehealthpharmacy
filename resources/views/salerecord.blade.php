@extends('layouts.app')
@section('title')
Search Confirmed
@endsection
@section('css')
   <link href="{{asset('css/addconfirmed.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavsearch')
@endsection
@section('content')
    <a href="EditItem">
		<img src="../Assets/Search Confirmed Assets/arrow-left.png" alt="" id="BackButton" />
	</a>
	
	<img src="../Assets/Search Confirmed Assets/TItle.png" alt="" id="Title" />
	<img src="../Assets/Search Confirmed Assets/Table Template.png" alt="" id="Table" />
	<img src="../Assets/Search Confirmed Assets/Search Confirm Bg.png" alt="" id="BigBg" />
	
  <div class="container">
  <p id= "IdBg">{{$saleId}}</p>
  <table>
    <tr>
      <th>Item Name</th>
      <th>Item Sold</th>
    </tr>
    @foreach($itemsolds as $itemsold)
      <tr>
        <td>{{$itemsold['Item_Name']}}</td>
        <td>{{$itemsold['Item_Sold']}}</td>
      </tr>
    @endforeach
  </table>
</div>
@endsection