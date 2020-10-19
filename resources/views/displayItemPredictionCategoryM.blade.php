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
	
	<form action="{{route('monthly')}}" class="submit_form" method="post">
   {{ csrf_field() }}
			<input type="text" id="item" name="fItem" value="Enter Item" >
				
			<input type="text" id="category" name="fCategory" value="Enter Category" >
			
			<input type="submit" value="Weekly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="weekly"/>
		
			<input type="submit" value="Monthly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="monthly" />
	</form> 
	
	<!--p elements for results after post-->
    @if(isset($monthSales))
    @foreach ($monthSales as $monthSale)
    </div>
	<p id="itemsbc">
    {{round($monthSale->quantity1)}}
	</p>
	<p id="itemswc">
    {{round($monthSale->quantity2)}}
	</p>
    @endforeach
    @endif
    @if(isset($monthSales2))
    @foreach ($monthSales2 as $monthSale )
	<p id="categorybc">
    {{round($monthSale->quantity1)}}
	</p>
	<p id="categorywc">
    {{round($monthSale->quantity2)}}
	</p>
    </div>
    @endforeach
    @endif
@endsection