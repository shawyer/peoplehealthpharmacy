@extends('layouts.app')
@section('title')
Predictions
@endsection
@section('css')
   <link href="{{asset('css/predictions.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavpredict')
@endsection
@section('content')
   <img src="../Assets/Predictions Assets/Fatality Graph.png" alt="" width = "1600" height="900" id="background_graph"/>
	<img src="../Assets/Predictions Assets/Group 9880.png" alt="" width = "570" height="460" id="itemprediction"/>
	<img src="../Assets/Predictions Assets/Group 9959.png" alt="" width = "570" height="460" id="categoryprediction"/>

   <form action="" class="submit_form" method="post">
			{{csrf_field()}}
         <input type="text" id="item" name="Item_Name" placeholder ="Enter Item" value="" >
        <input type="text" id="category" name="Item_Category" placeholder ="Enter Category" value="" >
        
        <input type="submit" value="Weekly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="weekly" formaction="{{route('weekly')}}"/>
        <input type="submit" value="Monthly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="monthly" formaction="{{route('monthly')}}"/>
    </form> 

@endsection