@extends('layouts.app')
@section('title')
Monthly Sales
@endsection
@section('css')
   <link href="{{asset('css/Reports.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavmonthly')
@endsection
@section('content')
    <div>	<!-- Search bar elements -->
	  	<img src="../Images/SearchBar.png" alt="Search Bar Bg" id="SearchBar">
		<img src="../Images/ReportsText.png" alt="Reports" id="ReportsText"> 	
		<img src="../Images/SearchIcon.png" alt="Manifying glass" id="SearchIcon">
		
		<form>
			<input type="text" placeholder="Search" id="SearchInput">
			<input type="submit" value="Search" onclick="history.back()" id="search"/>
		</form>
	</div>
    <div>	<!-- Filter elements -->
        <!-- Texts and other icons -->
        <img src="../Images/Bg Right.png" alt="Bg blue color" height="1080" id="BgRight">
        <img src="../Assets/Reports Assets/Light 🌕- Button-2. Outlined-A. Text-Enabled.png" alt="Download button" id="DownloadButton">
        <img src="../Images/FilterIcon.png" alt="Filter Icon" id="FilterIcon">
        <img src="../Images/FiltersText.png" alt="Filters" id="FiltersText">
        <img src="../Images/ViewText.png" alt="View" id="ViewText">
        <img src="../Images/DateText.png" alt="Date" width="89" height="35" id="DateText">
        <img src="../Assets/Reports Assets/QuantityText.png" alt="Person" width="89" height="35" id="PersonText">
        <img src="../Assets/Reports Assets/NameText.png" alt="Item" width="89" height="35" id="ItemText">
        <!-- <img src="../Images/PriceText.png" alt="Price" width="89" height="35" id="PriceText"> -->
        
        <!-- Arrow Icons -->
        <img src="../Images/ArrowDown.png" alt="Arrows Icon" id="ArrowDown1">
        <img src="../Images/ArrowDown.png" alt="Arrows Icon" id="ArrowDown2">
        <img src="../Images/ArrowDown.png" alt="Arrows Icon" id="ArrowDown3">
        <!-- <img src="../Images/ArrowDown.png" alt="Arrows Icon" id="ArrowDown4"> -->
        
        <img src="../Images/ArrowUp.png" alt="Arrows Icon" id="ArrowUp1"> 
        <img src="../Images/ArrowUp.png" alt="Arrows Icon" id="ArrowUp2">
        <img src="../Images/ArrowUp.png" alt="Arrows Icon" id="ArrowUp3">
        <!--<img src="../Images/ArrowUp.png" alt="Arrows Icon" id="ArrowUp4"> -->
        <form action="" method="post">
			<input type="checkbox" name="Date" value="Date" id="checkbox1">
			<input type="checkbox" name="DateDown" value="DateDown" id="checkbox1-1">
			<input type="checkbox" name="DateUp" value="DateUp" id="checkbox1-2"> 

			<input type="checkbox" name="Person" value="Name" id="checkbox2">
			<input type="checkbox" name="PersonDown" value="PersonDown" id="checkbox2-1">
			<input type="checkbox" name="PersonUp" value="PersonUp" id="checkbox2-2">

			<input type="checkbox" name="Date" value="Date" id="checkbox3">
			<input type="checkbox" name="ItemDown" value="ItemDown" id="checkbox3-1">
			<!-- <input type="checkbox" name="ItemUp" value="ItemUp" id="checkbox3-2"> -->

			<!-- <input type="checkbox" name="Price" value="$" id="checkbox4">
			<input type="checkbox" name="PriceDown" value="PriceDown" id="checkbox4-1"> -->
			<input type="checkbox" name="PriceUp" value="PriceUp" id="checkbox4-2"> 
			
			<input type="submit" value="Submit" class="large_buttons" id="SubmitButton" formaction="{{route('EditItemSaleAmount')}}"> 
                <!-- buttons -->
            <input type="button" value="Weekly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="weekly" {{route('EditItemSaleAmount')}}/>         
            <input type="button" value="Monthly" onclick="history.back()" width="320" height="110" class = "large_buttons" id="monthly" {{route('EditItemSaleAmount')}} />
		</form>

        
    </div>
    
    <div>
		<!-- table elements -->
		<img src="../Assets/Reports Assets/monthly sale data background.png" alt="table bg" width="1300" id="TableBg">
		<img src="../Assets/Reports Assets/TableTitle.png" alt="title" id="TableTitle">
		@foreach ($monthSales as $monthSale)
            <ul>
                <li>Sale Date: {{$monthSale->created_at}}</li>
                <li>Item Name: {{$monthSale->Item_Name}}</li>
                <li>Total Sold: {{$monthSale->Item_Sold}}</li>
            </ul>
        @endforeach
	</div>
    

@endsection