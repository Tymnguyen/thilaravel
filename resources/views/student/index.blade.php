<fieldset>
    <legend>Search By Keyword</legend>
    <form action="{{url('/student/searchByKeyword')}}" method="get">
        Keyword <input type="text" name="keyword" value="{{isset($keyword) ? $keyword : ''}}">
        <br><br>
        <button type="submit">Search</button>
    </form>
</fieldset>
<a href="{{url('/student/add')}}">Add</a>
<h3>Student Index</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>GENDER</th>
        <th>DOB</th>
        <th>SCORE</th>
        <th>ACTION</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->full_name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->score}}</td>
            <td>
                <a href="{{url('/student/details/'.$student->id)}}">Details</a>
                <a href="{{url('/student/edit/'.$student->id)}}">Edit</a>
                <a href="{{url('/student/delete/'.$student->id)}}" onclick="return confirm('Are u Sure?')">Delete</a>
            </td>
        </tr>
    @endforeach
</table>