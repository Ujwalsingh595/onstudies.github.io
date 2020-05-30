<?php
include "connect1.php";
?>
<html>
<head>
	<title>header</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet"href=".css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<meta name="viewport"content="width=device-width,initial-scale=1">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="bgimg">
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
     <a href=""class="navbar-brand text-warning font-weight-bold">E-Learning</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Home</a>
				<div class="nav-item dropdown">
                <a href="#" class="nav-item nav-link dropdown dropdown-toggle"data-toggle="dropdown">Study</a>
				<div class="dropdown-menu">
				
				<a href="select_exam.php"class="dropdown-item">Quizzes</a>
                                 <a href="freecourses.php"class="dropdown-item">Free Courses& Internships</a>
				   <a href="tutorials.php" class="dropdown-item ">Tutorials</a>
<a href="upload1.php" class="dropdown-item ">Assignments</a>
				</div></div>
               
                <a href="old_exam_results.php" class="nav-item nav-link">Results</a>
            </div>
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link"></a>
            </div>
			 <div class="navbar-nav ml-auto">
                <a href="userlogout.php" class="nav-item nav-link navbar-right"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
            </div>
        </div>
		</div>
    </nav>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12 text-right">
<div id="countdowntimer"style="display:block;"></div>
</div>
</div>
</div>
</div>

<script>
setInterval(function()
{
	timer();
},1000);
function timer()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200)
	{
if(xmlhttp.responseText=="00:00:01")
{
	window.location="result.php";
}
document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
	}
	};
	xmlhttp.open("GET","load_timer.php",true);
	xmlhttp.send(null);
}
</script>
</body>
</html>