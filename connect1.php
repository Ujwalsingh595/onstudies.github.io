<?php
$username="root";
$password="";
$server="localhost";
$db="loginadmin";
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
echo"";
}
else{
echo"no connection";
}
?>