@extends('layouts.app')
@section('title')
AddSales
@endsection
@section('css')
   <link href="{{asset('css/addsales.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavadd')
@endsection
@section('content')


 	<img src="{{ asset('Assets/background/background huge image') }}.png" alt="" width="1550" height="1000" id="background_art"/>
	<img src="{{ asset('Assets/background/new sale background') }}.png" alt="" width="750" height="790" id="form_background"/>
	<img src="{{ asset('Assets/background/State Cases Territor') }}.png" alt="" width="300" height="65" id="sale_form_title"/>
	

	<img src="{{ asset('Assets/passive/Group 9876.png') }}" alt="" width="250" height="360" id="passive-Info"/>
	
		<form action="/add" class="submit_form" method="post">
			
			<input type="text" id="fname" name="fname" value="Grant Imahara" >
				
			<input type="date" id="dDate" name="dDate" value="26/09/2020" >
			
			<input type="text" id="iItem" name="iItem" value="Panadol"  >
			
			<input type="text" id="pPrice" name="pPrice" value="6.99" >
			
			<input type="submit" value="Submit" class="large_buttons" id="submit_pos">
		</form> 
   {{-- <div class="container">
      <form method="post" action="{{route('submit')}}">
      {{csrf_field()}}
      <label> Item to add </label>
      <input type="text" name="Item_Name"><br>
      <label> Amount of item in stock </label>
      <input type="text" name="Item_Remaining"><br>
      <label> Item Category </label>
      <input type="text" name="Item_Category"><br>
      <button type="submit" value="submit"> Submit </submit>
   </form>
   </div> --}}
@endsection
