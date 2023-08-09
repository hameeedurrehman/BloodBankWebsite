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
        <th>Hospital Name </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($Hospital ?? '' as $Hospital)
      <tr>
        <td>{{$Hospital->hospitalname}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </form>
  </div>
  <script>
    $(document).ready(function() {
        $('#course_registration_table').DataTable();
    });
</script>

</body>

</html>