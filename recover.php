<?php
session_start();
include "connect.php";
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

<div class="container">
<div class="row justify-content-center">
<div class="col-lg-4">

<form class="form-container"action=""method="post">
<div class="form-group">

<div class="heading text-center  text-uppercase text-white">
<h3>Recover your account:</h3>
</div>
<label class="text-white"><i class="fa fa-user"></i>Email:</label>
<input type="text" name="email" class="form-control"required>
<span id="usererror"class="text-danger font-weight-bold"></spam>
</div>


<button type="submit"class="btn btn-primary btn-block"name="login">Send mail</button>


</div>
</div>
</div></div>
</form>
<?php
if(isset($_POST['login']))
{
$email=mysqli_real_escape_string($con,$_POST['email']);
$emailquery="select* from register where  email='$email'";
$query=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($query);
if($emailcount)
{
	$userdata=mysqli_fetch_array($query);
	$username=$userdata['username'];
	$token=$userdata['token'];
	$subject="Password Reset";
	$body="Hi ,$username,Click here too reset your password
	http://localhost/elearning/recover.php?token=$token";
	$sender_email="From:ujwalsingh595@gmail.com";
	if(mail($email,$subject,$body,$sender_email))
	{
		$_SESSION['msg']="check your mail to reset your password $email";
		header('location:login.php');
	}
	else{
		echo "email sending failed";
	}
}
}
?>



