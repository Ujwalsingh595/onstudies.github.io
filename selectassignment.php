<?php
include "connect1.php";
include "userheader.php";
$id=$_GET["id"];
$subject="";
$res=mysqli_query($con,"select * from assignment where id=$id");
while($row=mysqli_fetch_array($res))
{
	$subject=$row["subject"];
}

?>
<?php
include "connect1.php";
if(isset($_POST['upload']))
{
	
	$target="student_images/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	$text=$_POST['text'];
	$sql="INSERT into student_assignment(pdf,text)VALUES('$image','$text')";
	mysqli_query($con,$sql);
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
	{
		?>
		<script>
		alert("Submission successfull");
		</script>
		<?php
	
	}
	else{
		?>
		<script>
		alert("Submission not successfull");
		</script>
		<?php
	}
}
?>
<div class="row">
<div class="col-md-8 m-auto">
<div class="card">
<div class="card-title text-center"><h2>Add Submission</h2></div>
<div class="card-body">
<form method="post"action=""enctype="multipart/form-data">
<div class="form-group">
<input type="hidden"name="size"value="100000">
<div class="form-group">
<input type="file"class="form-control"name="image"></div>
<div class="form-group"><textarea name="text"class="form-control"cols="20"rows="3"placeholder="You can wite here and upload ."></textarea></div>
<div class="form-group"><input type="submit"class="btn btn-primary form-control"name="upload"value="upload">
</div>
</form>
<div></div>
</div></div>