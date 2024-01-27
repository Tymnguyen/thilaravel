<a href="{{url('/demo5')}}"></a>
<h3>File List</h3>
<br>
len::{{$len}}
<br><br>
@foreach($fileInfos as $fileInfo)
    <br>
    name: {{$fileInfo['name']}}
    <br>
    type:{{$fileInfo['type']}}
    <br>
    size:{{$fileInfo['size']}}
    <br>
    ------------------------------
    <br>
    <img src="{{asset('images/'. $fileInfo['name'])}}" alt="" width="100" height="100">
@endforeach