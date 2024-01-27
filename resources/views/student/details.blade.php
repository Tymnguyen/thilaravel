<a href="{{url('/student/index')}}">Back</a>
<h3>Student Info</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>GENDER</th>
        <th>DOB</th>
        <th>SCORE</th>
    </tr>
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->full_name}}</td>
        <td>{{$student->address}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->dob}}</td>
        <td>{{$student->score}}</td>
    </tr>
</table>