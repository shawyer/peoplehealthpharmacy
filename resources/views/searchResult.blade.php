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
   
    <a href="EditItem.html">
		<img src="../Assets/Search Confirmed Assets/arrow-left.png" alt="" id="BackButton" />
	</a>
	
	<img src="../Assets/Search Confirmed Assets/TItle.png" alt="" id="Title" />
	<img src="../Assets/Search Confirmed Assets/Table Template.png" alt="" id="Table" />
	<img src="../Assets/Search Confirmed Assets/Search Confirm Bg.png" alt="" id="BigBg" />
	
	<img src="../Assets/Search Confirmed Assets/IdBg.png" alt="" id="IdBg" />
	<img src="../Assets/Search Confirmed Assets/NameBg.png" alt="" id="NameBg" />
	<img src="../Assets/Search Confirmed Assets/AmountBg.png" alt="" id="AmountBg" />
@endsection