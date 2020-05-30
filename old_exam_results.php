<?php
session_start();
include "userheader.php";
include "connect1.php";
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
$count=0;
$res=mysqli_query($con,"select * from exam_results where username='$_SESSION[username]' order by id desc");
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