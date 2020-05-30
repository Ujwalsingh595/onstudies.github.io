<?php
session_start();
if(!isset($_SESSION["username"]))
{
	?>
	<script>
	window.location="login.php";
	</script>
	<?php
}


?>
<?php
include "userheader.php";
include "connect1.php";
?><div class="container">
<div class="row">
<div class="col-lg-8 m-auto">
<div class="card">
<div class="card-header bg-dark text-center text-white">
Welcome <?php echo $_SESSION['username']; ?>, select the subject in which  you want to give the exam.
</div>
</div><br><br>
<?php
$res=mysqli_query($con,"select*from exam_categories");
while($row=mysqli_fetch_array($res))
{
	?>
	<input type="button"class="btn btn-outline-info form-control"value="<?php echo $row['category'];?>" style="margin-top:10px;"onclick="set_exam_type_session(this.value);">
	<?php
}
?>
</div>
</div>
</div>
<script>
function set_exam_type_session(exam_category)
{
var req=new XMLHttpRequest();
req.open("GET","set_exam_type_session.php?exam_category="+exam_category,true);
req.send(null);
req.onreadystatechange=function()
{
	if(req.readyState==4 && req.status==200)
	{
		alert
		window.location="dashboard.php";
	}
}
	
}
</script>	
</html>