<?php
session_start();
include "connect1.php";

?>
<html>
<title>Admin</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
            
        </div>
        <div class="navbar-nav ml-auto">
            <a href="admin_log_out.php" class="nav-item nav-link">Logout</a>
        </div>
    </div>
</nav>
<div class="main">
<br>
<center><h3><div class="card">
<div class="header">All Exam Results</div>
</div>
<?php
$count=0;
$res=mysqli_query($con,"select * from exam_results  order by id desc");
$count=mysqli_num_rows($res);
if($count==0)
{
	?>
	<center>
	<h1> NO Results Found</h1>
	</center>
	<?php
}
else{
	echo "<table class='table table-bordered'>";
	echo "<tr style='background-color:#222930; color:white;'>";
	echo "<th>"; echo "username"; echo "</th>";
	echo "<th>";  echo "exam_type"; echo "</th>";
	echo "<th>";  echo "total questions"; echo "</th>";
	echo "<th>";  echo "correct answer"; echo "</th>";
	echo "<th>";  echo "wrong answer"; echo "</th>";
	echo "<th>"; echo "exam  time";  echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
	echo "<td>"; echo $row["username"]; echo "</td>";
	echo "<td>";  echo $row["exam_type"]; echo "</td>";
	echo "<td>"; echo $row["total_question"]; echo "</td>";
	echo "<td>";  echo $row["correct_answer"]; echo "</td>";
	echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
	echo "<td>"; echo $row["exam_time"];  echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
}