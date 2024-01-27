<a href="{{url('/demo5')}}"></a>
<h3>File Info</h3>
filename: {{$fileName}}
<br>
size:{{$size}}
<br>
type:{{$type}}
<br>
<img src="{{asset('images/'.$fileName)}}" alt="" width="100" height="100">