<?php
session_start();
include "connect1.php";
$question_no="";
$question=" ";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";
$count=0;
$ans="";
$queno=$_GET["questionno"];
if(isset($_SESSION["answer"][$queno]))
{
	$ans=$_SESSION["answer"][$queno];
}
$res=mysqli_query($con,"select * from question where category='$_SESSION[exam_category]'&& question_no=$_GET[questionno]");
$count=mysqli_num_rows($res);
if($count==0)
{
	echo "over";
}
else
{
	while($row=mysqli_fetch_array($res))
	{
		$question_no=$row['question_no'];
		$question=$row["question"];
		$opt1=$row["opt1"];
		$opt2=$row["opt2"];
		$opt3=$row["opt3"];
		$opt4=$row["opt4"];
	}
	?>
	<br>
	<div class="container">
  <div class="row" >
  
  	<div class="col-lg-8 m-auto display-block justify-content-center">
	
	<div class="card">
	<div class="card-header bg-dark text-center text-white">Welcome <?php echo $_SESSION['username']; ?>, you have to select 1 out of 4 questions.Best of Luck

	</div>
</div>
   
	<div class="card">
	
		
		<div  class="card-header"><h3><?php echo "($question_no.)"  .$question; ?></h3>
		</div>
		<div  class="card-header"><h5>
		<input type="radio"name="r1"id="r1"value="<?php echo $opt1; ?>"onclick="radioclick(this.value,<?php echo $question_no ?>)"
	<?php
	if($ans==$opt1)
	{
		echo "checked";
	}
	?>><?php
	echo $opt1;
	?></h5><br></div>
	
		<div  class="card-header"><h5><input type="radio"name="r1"id="r1"value="<?php echo $opt2; ?>"onclick="radioclick(this.value,<?php echo $question_no ?>)"
	<?php
	if($ans==$opt2)
	{
		echo "checked";
	}
	?>>
	<?php
	echo $opt2;
	?></h5><br></div>
		<div  class="card-header"><h5><input type="radio"name="r1"id="r1"value="<?php echo $opt3; ?>"onclick="radioclick(this.value,<?php echo $question_no ?>)"
	<?php
	if($ans==$opt3)
	{
		echo "checked";
	}
	?>><?php
	echo $opt3;
	?></h5><br></div>
		<div  class="card-header"><h5><input type="radio"name="r1"id="r1"value="<?php echo $opt4; ?>"onclick="radioclick(this.value,<?php echo $question_no ?>)"
	<?php
	if($ans==$opt4)
	{
		echo "checked";
	}
	?>><?php
	echo $opt4;
	?></h5><br></div>
	<br>
	</div>
	</div>
	</div>
	<?php
	}
	?>