<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dob" ).datepicker({
        dateFormat: 'dd/mm/yy'
    });
  } );
  </script>
<a href="{{url('/student/index')}}">Back</a>
<h3>Add</h3>
<form action="{{url('/student/save')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>Full Name</td>
            <td>
                <input type="text" name="full_name">
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
                <input type="text" name="address">
            </td>
        </tr>
        <tr>
            <td valign='top'>Gender</td>
            <td>
                <input type="radio" name="gender" value="male" checked> Male
                <br>
                <input type="radio" name="gender" value='female'> Female
            </td>
        </tr>
        <tr>
            <td>Dob</td>
            <td>
                <input type="text" name="dob" id="dob">
            </td>
        </tr>
        <tr>
            <td>Score</td>
            <td>
                <input type="number" name="score" min="0" max="10">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>