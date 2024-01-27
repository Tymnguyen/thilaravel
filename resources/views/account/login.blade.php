<h3>Login</h3>
{{isset($msg)? $msg : ''}}
<br>
@if(isset($msg))
    <span style="color: red;">{{$msg}}</span>
@endif
<br>
<form action="{{url('/account/process-login')}}" method="post">
    @csrf
    Username <input type="text" name="username">
    <br><br>
    Password <input type="password" name="password">
    <br><br>
    <button type="submit">Login</button>
</form>
