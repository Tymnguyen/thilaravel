<link rel="stylesheet" href="{{asset('css/style.css')}}">

<script src="{{asset('js/mylib.js')}}">

</script>
<a href="{{url('/demo3')}}">Menu 1</a>
<h3 class="format">Hello Word</h3>
id:{{$id}}
<br>
username:{{$username}}
<br>
status : {{$status? 'show' : 'hide'}}
<br>
price : {{$price}}
<br>
quantity : {{$quantity}}
<br>
<img src="{{asset('images/tym1.jpg')}}" alt="" width="100" height="100" onclick="clickMe()">
<br>
total:{{$price * $quantity}}