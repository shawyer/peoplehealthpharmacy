<div class="container">
  <h1>Get Sale Record</h1>
  <p>sale record: {{ $saleId}}</p>
  <ul>
    @foreach($itemsolds as $itemsold)
      <li>{{$itemsold['Item_Name']}},{{$itemsold['Item_Sold']}}</li>
    @endforeach
  </ul>
</div>
