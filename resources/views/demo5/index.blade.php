<h3>Search By Keyword</h3>
<form action="{{url('/demo5/searchByKeyword')}}" method="get">
    Keyword <input type="text" name="keyword">
    <br>
    <button type="submit">Search</button>
</form>
<form action="{{url('/demo5/login')}}" method="post">
    @csrf
    Username <input type="text" name="username">
    <br>
    Password <input type="password" name="password">
    <br><br>
    <button type="submit">Login</button>
</form>
<h3>Upload</h3>
<form enctype="multipart/form-data" method="post" action="{{url('/demo5/upload')}}">
    @csrf 
    <input type="file" name="file">
    <br><br>
    <button type="submit">Upload</button>
</form>
<h3>Uploads</h3>
<form enctype="multipart/form-data" method="post" action="{{url('/demo5/uploads')}}">
    @csrf 
    <input type="file" name="file[]" multiple>
    <br><br>
    <button type="submit">Upload</button>
</form>