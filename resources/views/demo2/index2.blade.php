<h3>Producr List</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHOTO</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
    </tr>
    @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>
                    <img src="{{asset('images/'.$product->photo)}}"  width="100" height="100">
                </td>
                <td>{{$product ->price}}</td>
                <td>{{$product ->quantity}}</td>
            </tr>
    @endforeach
</table>