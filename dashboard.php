<?php
include "connect1.php";
include "userheader.php";
session_start();
if(!isset($_SESSION["username"]))
{
	?>
	<script>
	window.location="login.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet"href="">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<meta name="viewport"content="width=device-width,initial-scale=1">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container">


      <body  >
<div id="current_que"style="float:left">0</div>
<div style="float:left">/</div>
<div id="load_total_que"style="float:left">10</div>
<div id="load_questions">
</div>

 </div>
  </div>
</div>  
          
	</div>

	

	<div class="row">

	<button type="button" class="btn btn-primary m-auto"style="width:100px;"onclick="load_previous();">Previous</button>

	<button type="button" class="btn btn-success m-auto"style="width:100px;"onclick="load_next();">Next</button>
   

  </div>

<script>
function load_total_que()
{
	
	var req=new XMLHttpRequest();
	req.open("GET","load_total_que.php",true);
	req.send();
	req.onreadystatechange=function(){
	if(req.readyState==4 && req.status==200)
	{
		
		document.getElementById['load_total_que'].innerHTML=req.responseText;
	
	}
	
	}
	
	
}
var questionno="1";
load_questions(questionno);
function load_questions(questionno)
{
	
	document.getElementById("current_que").innerHTML=questionno;
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		if(xmlhttp.responseText=="over")
		{
			window.location="result.php";
		}
		else
		{
			document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
			load_total_que();
		}
	}
	
	};
	
	xmlhttp.open("GET","load_question.php?questionno="+ questionno,true);
	xmlhttp.send(null);
}
function radioclick(radiovalue,questiono)
{	
	var req=new XMLHttpRequest();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200)
	{
	}
	};
	req.open("GET","saveanswer.php?questionno="+questionno +"&value1="+radiovalue,true);
	req.send(null);
	}
function load_previous()
{
	if(questionno=="1")
	{
		load_questions(questionno);
	}else{
		questionno=eval(questionno)-1;
		load_questions(questionno);
		
	}
	
}
function load_next()
{
	
		questionno=eval(questionno)+1;
		load_questions(questionno);
		
	
	
}
</script>

</body>
</html>