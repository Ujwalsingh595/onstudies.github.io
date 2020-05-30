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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet"href="admin.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<meta name="viewport"content="width=device-width,initial-scale=1">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="sidenav">
<a href=""><h2>Dashboard</h2></a>
<a href="">Add Exams</a>
<a href="examquestion.php">Add & Delete Questions</a>
<a href="">Add Videos Tutorials</a>
<a href="">Add Results</a>
<a href="">Logout</a>
</div>
<div class="main">
<h1>Add Questions inside <?php echo $exam_category ?></h1>
<div class="row">
<div class="col-lg-10">
<div class="card">
<form action=""method="post">
<div class="card-body">
<div  class="col-lg-4>
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
</div>
</div>


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