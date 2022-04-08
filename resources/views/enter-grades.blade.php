<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Enter Grades</title>
</head>
<body>
<div class="container-sm">
    <h1>Enter the Students' Grades</h1>

    <form action="/compute-grades" method="POST">
    <input type="hidden" name="student_1" value="{{ $student_1 }}">
    <input type="hidden" name="student_2" value="{{ $student_2 }}">
    <input type="hidden" name="student_3" value="{{ $student_3 }}">
    <input type="hidden" name="student_4" value="{{ $student_4 }}">
    <input type="hidden" name="student_5" value="{{ $student_5 }}">
    @csrf
    <div class="row">
        <label>Student: <b>{{ $student_1 }}</b></label>
        <div class="col col-md-4">
            <label>Midterm Grade</label>
            <input type="number" name="s1_grade1" class="form-control" required>
        </div>
        <div class="col col-md-4">
            <label>Finals Grade</label>
            <input type="number" name="s1_grade2" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <label>Student: <b>{{ $student_2 }}</b></label>
        <div class="col col-md-4">
            <label>Midterm Grade</label>
            <input type="number" name="s2_grade1" class="form-control" required>
        </div>
        <div class="col col-md-4">
            <label>Finals Grade</label>
            <input type="number" name="s2_grade2" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <label>Student: <b>{{ $student_3 }}</b></label>
        <div class="col col-md-4">
            <label>Midterm Grade</label>
            <input type="number" name="s3_grade1" class="form-control" required>
        </div>
        <div class="col col-md-4">
            <label>Finals Grade</label>
            <input type="number" name="s3_grade2" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <label>Student: <b>{{ $student_4 }}</b></label>
        <div class="col col-md-4">
            <label>Midterm Grade</label>
            <input type="number" name="s4_grade1" class="form-control" required>
        </div>
        <div class="col col-md-4">
            <label>Finals Grade</label>
            <input type="number" name="s4_grade2" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <label>Student: <b>{{ $student_5 }}</b></label>
        <div class="col col-md-4">
            <label>Midterm Grade</label>
            <input type="number" name="s5_grade1" class="form-control" required>
        </div>
        <div class="col col-md-4">
            <label>Finals Grade</label>
            <input type="number" name="s5_grade2" class="form-control" required>
        </div>
    </div>
    
    <hr />
    <div class="row">
        <button class="btn btn-primary btn-lg" type="submit">Compute Average Grade</button>
    </div>
    </form>
</div>   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>