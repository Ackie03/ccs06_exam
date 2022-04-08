<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Computed Average Grades</title>
</head>
<body>
<div class="container-sm">
    <h1><b>The Average Grade of Students</b></h1>

    <table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">Student Name</th>
        <th scope="col">Midterm Grade</th>
        <th scope="col">Finals Grade</th>
        <th scope="col">Average Grade</th>
        <th scope="col">Remarks</th>
    </tr>
    </thead>    
    </tbody>
    <tr>
        <td>{{ $student_1 }}</td>
        <td>{{ $s1_grade1 }}</td>
        <td>{{ $s1_grade2 }}</td>
        <td>{{ $s1_average }}</td>
        <td>{{ $s1_remark }}</td>
    </tr>
    <tr>
        <td>{{ $student_2 }}</td>
        <td>{{ $s2_grade1 }}</td>
        <td>{{ $s2_grade2 }}</td>
        <td>{{ $s2_average }}</td>
        <td>{{ $s2_remark }}</td>
    </tr>
    <tr>
        <td>{{ $student_3 }}</td>
        <td>{{ $s3_grade1 }}</td>
        <td>{{ $s3_grade2 }}</td>
        <td>{{ $s3_average }}</td>
        <td>{{ $s3_remark }}</td>
    </tr>
    <tr>
        <td>{{ $student_4 }}</td>
        <td>{{ $s4_grade1 }}</td>
        <td>{{ $s4_grade2 }}</td>
        <td>{{ $s4_average }}</td>
        <td>{{ $s4_remark }}</td>
    </tr>
    <tr>
        <td>{{ $student_5 }}</td>
        <td>{{ $s5_grade1 }}</td>
        <td>{{ $s5_grade2 }}</td>
        <td>{{ $s5_average }}</td>
        <td>{{ $s5_remark }}</td>
    </tr>
    </table>
</div>   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>