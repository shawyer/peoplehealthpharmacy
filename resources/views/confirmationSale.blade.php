<!-- 
<div class="container">
  <p> Item has been successfully added </p>
  <a href="{{route('add')}}">Add Another</a>
</div>
-->
<!-- this page is the same as confirmation blade but too lazy to fix -->
@extends('layouts.app')
@section('title')
AddSalesConfirmation
@endsection
@section('css')
   <link href="{{asset('css/submitconfirmed.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavbase')
@endsection
@section('content')

<img src="../Assets/Submit Confirmed Assets/Title.png" alt="" id="PageTitle" />
		<img src="../Assets/Submit Confirmed Assets/ConfirmedText.png" id="ConfirmedText" />
		<img src="../Assets/Submit Confirmed Assets/ConfirmBg.png" id="ConfirmBg" />
    
    <input type="button" value="Back" onclick="history.back()" width="320" height="110" class = "large_buttons" id="BackButton" />
