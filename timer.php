<html>
<title>Timer</title>
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
<style>
*{

margin:0;
padding:0;}
div{
height:100vh;
display:flex;
fex-direction:column;
justify-content:center;
align-item:center;
background-image:linear-gradient(#16bffd,#cb3066);
}
p{

height:100px;
width:600px;
background-image:linear-gradient(#16bffd,#cb3066);
color:white;
line-height:100px;
text-align:center;
font-size:30px;
margin-top:300px;

}
</style>
<body>
<div>

<p id="demo">TIMER</p>
</div>

<script>
var dest=new Date("may 26,2020 8:00:00").getTime();
var x=setInterval(function(){
var now= new Date().getTime();
var diff=dest-now;
var days=Math.floor(diff/(1000*60*60*24));
var hours=Math.floor(diff%(1000*60*60*24)/(1000*60*60));
var minutes=Math.floor(diff%(1000*60*60)/(1000*60));
var seconds=Math.floor(diff%(1000*60)/(1000));
document.getElementById("demo").innerHTML=days+"d,"+hours+"hrs:"+minutes+"m:"+seconds+"s"
},1000);
</script>

</body>

</html>