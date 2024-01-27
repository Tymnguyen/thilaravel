<html>
    <head>
        <title>My Layout</title>
    </head>
    <body>
        <a href="{{url('/home')}}">Home</a>
        <a href="{{url('/aboutus')}}">About Us</a>
        <a href="{{url('/news')}}">News</a>
        <br><br>    
        <!-- đây là dữ lệu thay đổi -->
            @yield('content') 
        <br><br>
        Copyright

    </body>
</html>