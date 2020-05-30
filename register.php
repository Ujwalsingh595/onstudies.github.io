<?php
include "connect.php";
include"header.php";
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
<script>

function validation()
{
var emailcheck=document.getElementById('emailcheck').value;
var pattern=/^[A-Za-z_.]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
if(pattern.test(emailcheck))
{
document.getElementById('msg').innerHTML="Email is ok";
}
else{

document.getElementById('msg').innerHTML="Email is not  ok";
return false;
}}
</script>
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
    <h1 class="text-center text-white "><b>Registration</b></h1><br>
<label class="text-white"><i class="fas fa-user"></i>UserName:</label>
<input type="text"name="username"id="emailcheck"class="form-control"placeholder="Enter username"pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"required>
<span id="usererror"class="text-danger font-weight-bold"></spam>
</div>
<div class="form-group">
<label class="text-white"><i class="fas fa-user-shield"></i>Email:</label>
<input type="email"name="email"id="email"class="form-control"placeholder="Enter email"required>
<span id="emailerror"class="text-danger font-weight-bold"></spam>
</div>
<div class="form-group">
<label class="text-white"><i class="fa fa-mobile"></i> Mobile</label>
<input type="text"name="mobile"id="number"class="form-control"placeholder="Enter mobile no."required>
<span id="numbererror"class="text-danger font-weight-bold"></spam>
</div>
<div class="form-group">
<label class="text-white"><i class="fas fa-key"></i>Password</label>
<input type="password" class="form-control" name="password"placeholder="Password must be 1 lowercase,1uppercase & one digit"pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"required></textarea>
</div>
<button class="btn btn-primary btn-block"name="submit">Register</button>
<div class="alert alert-success"id="success"style="margin-top:10px; display:none">
<strong>Success:</strong>Account Registraion Successfull.
</div>
<div class="alert alert-danger"id="failure"style="margin-top:10px; display:none">
<strong>Already exist:</strong>This username or email is already registered.
</div>
</div>
</div>
</div>
</form>
<?php
if(isset($_POST["submit"]))
{
		$token=bin2hex(random_bytes(15));
$count=0;
$res=mysqli_query($con,"select * from register where username='$_POST[username]' or email='$_POST[email]'") or die(mysqli_error($con));
$count=mysqli_num_rows($res);
if($count>0)
{
?>
<script>
document.getElementById("failure").style.display="block";
document.getElementById("success").style.display="none";
</script>
<?php
}else{
mysqli_query($con,"insert into register values(NULL,'$_POST[username]','$_POST[email]','$_POST[mobile]','$_POST[password]','$token')");
?>
<script>
document.getElementById("success").style.display="block";
document.getElementById("failure").style.display="none";
</script>
<?php
}}
?>

