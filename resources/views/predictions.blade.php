@extends('layouts.app')
@section('title')
Predictions
@endsection
@section('css')
   <link href="{{asset('css/predictions.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavprediction')
@endsection
@section('content')
    <img src="../Assets/Predictions Assets/Fatality Graph.png" alt="" width = "1600" height="900" id="background_graph"/>
	<img src="../Assets/Predictions Assets/Group 9880.png" alt="" width = "570" height="460" id="itemprediction"/>
	<img src="../Assets/Predictions Assets/Group 9959.png" alt="" width = "570" height="460" id="categoryprediction"/>
	
	<form action="" class="submit_form">
			
        <input type="text" id="item" name="fItem" value="Enter Item" >
        <input type="text" id="category" name="fCategory" value="Enter Category" >
        
        <input type="submit" value="Weekly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="weekly"/>
        <input type="submit" value="Monthly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="monthly" />
    </form> 

@endsection