<?php
include "adminconnect.php";
$id=$_GET["id"];
$exam_category="";
$res=mysqli_query($con,"select * from exam_categories where id=$id");
while($row=mysqli_fetch_array($res))
{
	$exam_category=$row["category"];
}

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
            <a href="indexadmin.php" class="nav-item nav-link active">Home</a>
            <a href="indexadmin.php" class="nav-item nav-link">Add Exams</a>
            <a href="examquestion.php" class="nav-item nav-link">Add and Delete Questions</a>
			            <a href="old_exam_results_admin.php" class="nav-item nav-link">All Exam Results</a>
            
        </div>
        <div class="navbar-nav ml-auto">
            <a href="admin_log_out.php" class="nav-item nav-link">Logout</a>
        </div>
    </div>
</nav><br>
<div class="main">
<h1>Add Questions inside <?php echo $exam_category ?></h1>
<div class="row">
<div class="col-lg-12">
<div class="card">
<form action=""method="post">
<div class="card-body">
<div  class="col-lg-6>
<div class="card">
<div class="card-header"><strong><h1>Add new Questions</h1></strong>
<div class="card-body card-block">

<div class="form-group">
<label class="form-control-label">Add Question</label>
<input type="text"class="form-control"name="questiom">
</div>

<div class="form-group">
<label class="form-control-label">Add Opt1</label>
<input type="text"class="form-control"name="opt1">
</div>
<div class="form-group">
<label class="form-control-label">Add Opt2</label>
<input type="text"class="form-control"name="Opt2">
</div>
<div class="form-group">
<label class="form-control-label">Add Opt3</label>
<input type="text"class="form-control"name="Opt3">
</div>
<div class="form-group">
<label class="form-control-label">Add Opt4</label>
<input type="text"class="form-control"name="Opt4">
</div>
<div class="form-group">
<label class="form-control-label">Add Ans</label>
<input type="text"class="form-control"name="Ans">
</div>
<div class="form-group">
<input type="submit"class="btn btn-success"name="add">
</div>


</div>

</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<table class="table table-bordered">
<tr>
<th>no</th>
<th>Question</th>
<th>Opt1</th>
<th>Opt2</th>
<th>Opt3</th>
<th>Opt4</th>
</tr>

<?php
$res=mysqli_query($con,"select *  from question where category='$exam_category'order by  question_no  asc");
while($row=mysqli_fetch_array($res))
{

echo "<tr>";

echo "<td>"; echo $row["question_no"]; echo"</td>";
echo "<td>"; echo $row["question"]; echo"</td>";
echo "<td>"; echo $row["opt1"]; echo"</td>";
echo "<td>"; echo $row["opt2"]; echo"</td>";
echo "<td>"; echo $row["opt3"]; echo"</td>";
echo "<td>"; echo $row["opt4"]; echo"</td>";
}
?>

</table>

</div>
</div>
</div>
</div>

</div>
</div>

</form>
</div>
</div>
</div>

</div>
</div>

</body>
</html>
<?php
if(isset($_POST["add"]))
{
	$loop=0;
	$count=0;
	$res=mysqli_query($con,"select * from question where  category='$exam_category' order by id asc");
	$count=mysqli_num_rows($res);
	if($count==0)
	{
		
		
	}
	else{
		while($row=mysqli_fetch_array($res))
		{
			$loop=$loop+1;
			mysqli_query($con,"update question set question_no='$loop'where id=$row[id]");
			
		}
		
	}
	$loop=$loop+1;
mysqli_query($con,"insert into question values(NULL,'$loop','$_POST[questiom]','$_POST[opt1]','$_POST[Opt2]','$_POST[Opt3]','$_POST[Opt4]','$_POST[Ans]','$exam_category')");

?>
<script>
alert("Question Added Successfully");
window.location.href=window.location.href;
</script>
<?php
}
?>