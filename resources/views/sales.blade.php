
@extends('layouts.app')
@section('title')
Add Stock
@endsection
@section('css')
   <link href="{{asset('css/addsales.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('verticalnav')
@include('layouts.components.verticalnavadd')
@endsection
@section('content')

   <img src="../Assets/Add Sales Assets/background huge image.png" alt="" width="1550" height="1000" id="background_art"/>
	<img src="../Assets/Add Sales Assets/New Sale Form.png" alt="" width="750" height="590" id="form_background"/>
	
	 
   <form action="{{route('sale')}}" class="submit_form" method="post" >
         {{csrf_field()}}
      <input type="text"  id="iItem" name="Item_Name" placeholder="Panadol"  >
      
      <input type="text" id="pPrice" name="Qty" placeholder="2" >
      
      <button type="submit" text="submit" value="submit" class="large_buttons" id="submit_pos"> Submit </submit>
   </form> 

{{-- <div class="container">
   <form method="post" action="{{route('sale')}}">
   {{csrf_field()}}
   <label> Items sold </label>
   <input type="text" name="Item_Name"><br>
   <label> Amount Sold </label>
   <input type="text" name="Qty"><br>
   <button type="submit" text="submit" value="submit"> Submit </submit>
</form>
</div> --}}

@endsection

