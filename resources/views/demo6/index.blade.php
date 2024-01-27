<h3>Index Demo6</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>STATUS</th>
        <th>PHOTO</th>
        <TH>CREATED</TH>
        <TH>DESCRIPTION</TH>
    </tr>
    @foreach($mobiles as $mobile)
        <tr>
            <td>{{$mobile ->id}}</td>
            <td>{{$mobile ->name}}</td>
            <td>{{$mobile ->price}}</td>
            <td>{{$mobile ->quantity}}</td>
            <td>{{$mobile ->status ? 'show' : 'hide' }}</td>
            <td> <img src="{{asset('images/'.$mobile->photo)}}" alt="" width="100" height="100"></td>
            <td>{{DateTime::createFromFormat('Y-m-d',$mobile->created)->format('d/m/Y')}}</td>
            <td>{{$mobile ->description}}</td>
        </tr>
    @endforeach
</table>