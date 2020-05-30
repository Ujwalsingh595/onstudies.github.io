<?php
include "connect1.php";
if(isset($_POST['upload']))
{
	$subject=$_POST['subject'];
	$target="images/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	$text=$_POST['text'];
	$sql="INSERT into assignment(subject,pdf,text)VALUES('$subject','$image','$text')";
	mysqli_query($con,$sql);
	move_uploaded_file($_FILES['image']['tmp_name'],$target);
	
}
?>
<html>

<html>
<title>Assignment</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>

</style>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">
        E-Learning
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Add Exams</a>
            <a href="examquestion.php" class="nav-item nav-link">Add and Delete Questions</a>
			            <a href="old_exam_results_admin.php" class="nav-item nav-link">All Exam Results</a>
             <a href="upload.php" class="nav-item nav-link">Add Assignments</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="admin_log_out.php" class="nav-item nav-link">Logout</a>
        </div>
    </div>
	
</nav><div class="row">
<div class="col-md-8 m-auto">
<div class="card">
<div class="card-title text-center"><h2>Add Assignments</h2></div>
<div class="card-body">
<form method="post"action=""enctype="multipart/form-data">
<div class="form-group">
<input type="hidden"name="size"value="100000">
<input type="text"class="form-control"name="subject"placeholder="Add Subject:"></div>
<div class="form-group">
<input type="file"class="form-control"name="image"></div>
<div class="form-group"><textarea name="text"class="form-control"cols="20"rows="3"placeholder="Enter the details of assignment."></textarea></div>
<div class="form-group"><input type="submit"class="btn btn-primary form-control"name="upload"value="upload">
</div>
</form>
<div></div>
</div></div>

</html>