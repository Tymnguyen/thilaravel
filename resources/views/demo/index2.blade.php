<a href="{{url('/demo2')}}">Back</a>
<br><br>
@if($status)
    <span style="color: blue;">Show</span>
@else   
    <span style="color: red;">Show</span>
@endif
<br><br>
@if($score >=8)
    <span style="color: red;">A</span>
@elseif($score >= 7)
    <span style="color: blue;">B</span>
@elseif($score >= 5)
    <span style="color: green;">C</span>
@else($score < 5)
    <span style="color: black;">D</span>
@endif
<br><br>
<ul>
    @foreach($names as $name)
        <li>{{$name}}</li>
    @endforeach
</ul>
<br><br>
@foreach($photos as $photo)
    <img src="{{asset('images/'.$photo)}}" alt="" width="100" height="100"> &nbsp;
@endforeach