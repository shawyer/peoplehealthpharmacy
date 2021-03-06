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
<img src="../Images/ReportsText.png" alt="Reports" id="ReportsText">

<div>	<!-- Filter elements -->
    <!-- Texts and other icons -->
    <img src="../Images/Bg Right.png" alt="Bg blue color" height="1080" id="BgRight">
    
    <img src="../Images/FilterIcon.png" alt="Filter Icon" id="FilterIcon">
    <img src="../Images/FiltersText.png" alt="Filters" id="FiltersText">
    <img src="../Images/ViewText.png" alt="View" id="ViewText">
    <img src="../Assets/Reports Assets/SortText.png" alt="Sort" id="SortText">
    <img src="../Assets/Reports Assets/CriteriaText.png" alt="Criteria" id="CriteriaText">
    <img src="../Assets/Reports Assets/name.png" alt="Name" id="NameText">

    <form method="post" action="{{route('display-month')}}">
        {{csrf_field()}}
        <input type="radio" name="sort" value="a" id="sortA"/>
        <label for="sortA" id="sortla">Asc</label><br>
        <input type="radio" name="sort" value="d" id="sortD"/>
        <label for="sortD" id="sortld">Desc</label><br>

        <select name="Criteria" id="dropdownMenu">
            <option value="qty">Quantity</option>
            <option value="name">Item</option>
            <option value="date">Date</option>
        </select>
        <input type="text" placeholder="(optional)" name="filter" id="ItemNameInput">
        <input type="submit" value="Submit" class="large_buttons" id="SubmitButton">
    </form>
    
    <!-- buttons -->
    <!-- we already im weekly -->
    <input type="button" value="Weekly"  width="320" height="110" class = "large_buttons" id="weekly"/>
    <input type="button" value="Monthly" onclick="window.location.href='/displaymonth'" width="320" height="110" class = "large_buttons" id="monthly" />
    <!-- routing for csv file download -->
    <a href="{{route('csv')}}">
        <img src="../Assets/Reports Assets/Light 🌕- Button-2. Outlined-A. Text-Enabled.png" alt="Download button" id="DownloadButton">
    </a>
</div>

<div>
    <!-- table elements -->
    <img src="../Assets/Reports Assets/monthly sale data background.png" alt="table bg" width="1300" id="TableBg">
    <img src="../Assets/Reports Assets/TableTitle.png" alt="title" id="TableTitle">
    <!-- new table -->
    <table>
        <tr>
            <th> Item Name </th>
            <th> Total Sold </th>
            <th> Sales Date </th>
        </tr>
        @foreach ($weekSales as $weekSale)
            <tr>
                <td> {{$weekSale->Item_Name}}</td>
                <td> {{$weekSale->Item_Sold}}</td>
                <td> {{$weekSale->created_at}}</td>
            </tr>
        @endforeach
    </table>
</div>