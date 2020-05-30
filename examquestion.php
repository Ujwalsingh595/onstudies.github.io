<?php
include"adminconnect.php";
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
</nav><br>
<div class="main">
<h3><center>Select exam categories for Add and Delete Exam Questions</center></h3><br>
<div class="row">
<div class="col-lg-8 m-auto">
<div class="card">
<div class="card-header">
<strong class="card-title">Exam categories</strong>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th class="text-center">#</th>
<th class="text-center">Exam name</th>
<th class="text-center">Exam Time</th>
<th class="text-center">Select</th>
</tr>
</thead>

<?php
$count=0;
$res=mysqli_query($con,"select *  from exam_categories");
while($row=mysqli_fetch_array($res))
{
	$count=$count+1;
	?>
	<tr>
<td><?php echo $count;?></td>
<td><?php echo $row["category"];?></td>
<td><?php echo $row["exam_time"];?></td>
<td><a href="selectquestion.php?id=<?php echo $row["id"];?>">Select</a></td>
</tr>
<?php
}
?>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>