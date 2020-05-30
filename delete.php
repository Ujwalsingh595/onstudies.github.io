<?php
include"adminconnect.php";
$id=$_GET["id"];
mysqli_query($con,"delete from exam_categories where id=$id");
?>
<script>
window.location="indexadmin.php";
</script>