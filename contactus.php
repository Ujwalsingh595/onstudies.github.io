<?php
include"header.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$issue=$_POST['issue'];
	$to="ujwalsingh595@gmail.com";
	
	if(mail($to,$subject,$issue,$email))
	{
	?>
	<script>
	alert("Mail Send Successfully");
	</script>
		<?php
	}
	else{
		?>
	<script>
	alert("Mail dosen't Send Successfully");
	</script>
		<?php
	}
	
}
?>
<html>
<head>
<title>Contact Us</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<meta name="viewport"content="width=device-width,initial-scale=1">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  background: url("contact.jpg") ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
				 
          </style>



</head>

      <body>
      

<div class="container-fuid">
<div class="row justify-content-center">
<div class="col-lg-4 col-lg-offset-4">
<form class="form-container"action=""method="post"><br><br>
	<h1 class="text-white text-center"><b>Contact Us</b></h1><br>
<div class="form-group">
<label class="text-white"><i class="fa fa-user"></i>Name:</label>
<input type="text"name="name"id="emailcheck"class="form-control"required>
<span id="usererror"class="text-danger font-weight-bold"></spam>
</div>
<div class="form-group">
<label class="text-white"><i class="fas fa-user-shield"></i>Email:</label>
<input type="text"name="email"id="email"class="form-control"required>
<span id="emailerror"class="text-danger font-weight-bold"></spam>
</div>
<div class="form-group">
<label class="text-white"><i class="fa fa-mobile"></i> Subject</label>
<input type="text"name="subject"id="number"class="form-control"required>
<span id="numbererror"class="text-danger font-weight-bold"></spam>
</div>
<div class="form-group">
    <label class="text-white" for="exampleFormControlTextarea1">Enter your issue.</label>
    <textarea class="form-control"name="issue" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<button class="btn btn-primary btn-block"name="submit">Submit</button>
<div class="alert alert-success"id="success"style="margin-top:10px; display:none">
<strong>Success:</strong>Your messege is delivered.
</div>
<div class="alert alert-danger"id="failure"style="margin-top:10px; display:none">
<strong>Already exist:</strong>This username or Email is already taken.
</div>
</div>
</div>
</div>
</form>
