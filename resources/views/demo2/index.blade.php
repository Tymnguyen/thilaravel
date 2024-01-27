<h3>Product Info</h3>
<table border="1">
    <tr>
        <td>ID</td>
        <td>
            {{$product ->id}}
        </td>
    </tr>
    <tr>
        <td>NAME</td>
        <td>
            {{$product ->name}}
        </td>
    </tr>
    <tr>
        <td>PHOTO</td>
        <td>
            <img src="{{asset('images/'.$product ->photo)}}" alt="" width="100" height="100"> &nbsp;
        </td>
    </tr>
    <tr>
        <td>PRICE</td>
        <td>
            {{$product ->price}}
        </td>
    </tr>
    <tr>
        <td>QUANTITY</td>
        <td>
            {{$product ->quantity}}
        </td>
    </tr>
    <tr>
        <td>TOTAL</td>
        <td>
            {{$product->quantity * $product->price}}
        </td>
    </tr>
</table>