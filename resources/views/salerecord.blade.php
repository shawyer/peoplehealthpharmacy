<div class="container">
  <h1>Get Sale Record</h1>
  <p>sale record: {{ $saleId}}</p>
  <table border="1px">
    <tr><td>Item Name</td><td>Item Sold</td></tr>
    @foreach($itemsolds as $itemsold)
      <tr>
        <td>{{$itemsold['Item_Name']}}</td>
        <td>{{$itemsold['Item_Sold']}}</td>
      </tr>
    @endforeach
  </</table>>
</div>
