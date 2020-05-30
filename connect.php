<?php
$username="root";
$password="";
$server="localhost";
$db="register1";
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
echo"Sucess";
}
else{
echo"no connection";
}
?>