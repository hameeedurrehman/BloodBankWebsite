<!DOCTYPE html>
<html>

<head>
  <!-- Include DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Include DataTables JS -->
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <title> BLOOD DONATION CENTER</title>
</head>

<body>
  <table id="course_registration_table">
    <thead>
      <tr>
        <th> Name </th>
        <th> Father name</th>
        <th> Contact No</th>
        <th> Address</th>
        <th> CNIC</th>
        <th> DOB</th>
        <th> Age</th>
        <th> Gender</th>
        <th> Blood Group</th>
        <th> Hospital</th>
      </tr>
    </thead>
    <tbody>
      <p></p>
      @foreach ($donor ?? '' as $donors)
      <tr style=" background-color:#F5B041; text-align:center;">

        <td>{{$donors->name}}</td>
        <td>{{$donors->fathername}}</td>
        <td>{{$donors->phoneno}}</td>
        <td>{{$donors->address}}</td>
        <td>{{$donors->cnic}}</td>
        <td>{{$donors->dob}}</td>
        <td>{{$donors->age}}</td>
        <td>{{$donors->gender}}</td>
        <td>{{$donors->bloodgroup->bloodgroupname}}</td>
        <td>{{$donors->hospital->hospitalname}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br><br>
  <script>
    $(document).ready(function() {
      $('#course_registration_table').DataTable();
    });
  </script>
</body>

</html>