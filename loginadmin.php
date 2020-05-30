<?php
session_start();
include "connect1.php";
include "header.php";
?>
<html>
<title>registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet"href="style.css"/>
<meta name="viewport"content="width=device-width,initial-scale=1">
<link rel="stylesheet"href="slide.css"/>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://kit.fontawesome.com/b99e675b6e.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="validation.js"></script>

<style>
 .form-container{
background:#222930;
padding:20px;
border-radius:10px;
box-shadow:0px 0px 10px 0px #000;

}
            body{
                  width: 100%;
                  background: url("book.jpg") ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
				 
          </style>

<body>

<div class="container-fuid">
<div class="row justify-content-center">
<div class="col-lg-4">

<br>
<form class="form-container"action=""method="post">
<div class="form-group">
    <h1 class=" text-center text-white"><b>Login</b></h1><br>
<label class="text-white" ><i class="fas fa-user"></i>UserName:</label>
<input type="text" name="username" class="form-control"placeholder="Enter username"required>
<span id="usererror"class="text-danger font-weight-bold"></spam>
</div>

<div class="form-group">
<label class="text-white"><i class="fas fa-key"></i>Password</label>
<input type="password"class="form-control" name="password"placeholder="Enter password"></textarea>
</div>
<button type="submit"class="btn btn-primary btn-block"name="login">Login</button>

<div class="alert alert-danger"id="failure"style="margin-top:10px; display:none">
<strong>Does not Match!!</strong>Invalid Username or Password.
</div>
</div>
</div>
</div>
</form>
<?php
if(isset($_POST['login']))
{
$count=0;
$username=mysqli_real_escape_string($con,$_POST["username"]);
$password=mysqli_real_escape_string($con,$_POST["password"]);
$res=mysqli_query($con,"select * from login where username='$username' && password='$password'");
$count=mysqli_num_rows($res);
if($count==0)
{
?>
<script>
document.getElementById("failure").style.display="block";
</script>
<?php
}else{
	$_SESSION["admin"]=$username;
?>
<script>
window.location="indexadmin.php";
</script><?php
}
}
?>



