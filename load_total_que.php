<?php
session_start();
include"connect1.php";
$total_que="";
$res=mysqli_query($con,"select * from question where category='$_SESSION[exam_category]'");
$total_que=mysqli_num_rows($res);
echo $total_que;
?>