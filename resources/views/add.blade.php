@extends('layouts.app')
@section('title')
AddSales
@endsection
@section('css')
   <link href="{{asset('css/addstock.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavstock')
@endsection
@section('content')

 	<img src="../Assets/Add Stock Assets/State Cases Territor.png" alt="" id="AddStockText" />
	<img src="../Assets/Add Stock Assets/background form.png" alt="" id="img1" />
	<img src="../Assets/Add Stock Assets/background form.png" alt="" id="img2" />
	<img src="../Assets/Add Stock Assets/Add Stock Bg.png" alt="" id="BigBg" />
	
	<div>
		<form action="{{route('submit')}}" method="post">
       {{csrf_field()}}
			<img src="../Assets/Add Stock Assets/Rectangle Copy 4.png" alt="" id="TableBg" />
			<img src="../Assets/Add Stock Assets/TableField.png" alt="" id="TableFields" />
			<img src="../Assets/Add Stock Assets/ItemBg.png" alt="" id="ItemBg" />
			<img src="../Assets/Add Stock Assets/StockBg.png" alt="" id="StockBg" />
			<img src="../Assets/Add Stock Assets/CategoryBg.png" alt="" id="CategoryBg" />
			
			<input type="text" placeholder="Item's name" id="ItemInput" name="Item_Name">
			<input type="text" placeholder="Amount remaining" id="StockInput" name="Item_Remaining">
			<input type="text" placeholder="Item's category" id="CategoryInput" name="Item_Category">
			
			<input type="submit" value="Submit" class="large_buttons" id="SubmitButton"> 
		</form>
	</div>
	
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
