<?php
session_start();
include "connect1.php";
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date."+$_SESSION[exam_time] minutes"));
include "userheader.php";
?>
<?php
$correct=0;
$wrong=0;
if(isset($_SESSION["answer"]))
{
	for($i=1;$i<=sizeof($_SESSION["answer"]);$i++)
	{
		$answer="";
		$res=mysqli_query($con,"select *  from question where category='$_SESSION[exam_category]'&&question_no=$i");
		while($row=mysqli_fetch_array($res))
		{
			$answer=$row["answer"];
		}
		if(isset($_SESSION["answer"][$i]))
		{
			if($answer==$_SESSION["answer"][$i])
			{
				$correct=$correct+1;
			}
			else{
				$wrong=$wrong+1;
			}
		}
		else{
			$wrong=$wrong+1;
	                }
		}
}
$count=0;
$res=mysqli_query($con,"select *  from question where category='$_SESSION[exam_category]'");
$count=mysqli_num_rows($res);
$wrong=$count-$correct;
echo "<br>"; echo"<br>";
echo "<center>";
echo  "Total Questions=".$count;
echo "<br>";
echo "Correct Answer=".$correct;
echo "<br>";
echo "Wrong Answer".$wrong;
echo "</center>";

?>
<?php
if(isset($_SESSION["exam_start"]))
{
	$date=date("Y-m-d");
	mysqli_query($con,"insert into exam_results(id,username,exam_type,total_question,correct_answer,wrong_answer,exam_time)values(NULL,'$_SESSION[username]','$_SESSION[exam_category]','$count','$correct','$wrong','$date')");
	
}
if(isset($_SESSION["exam_start"]))
{
	unset($_SESSION["exam_start"]);
	?>
	<script>
	window.location.href=window.location.href;
	</script>
	<?php
}


?>