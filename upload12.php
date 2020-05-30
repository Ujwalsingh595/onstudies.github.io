<?php
include "connect1.php";
include "userheader.php";
?>

<div class="row">
<div class="col-lg-8 m-auto">
<div class="card">
<div class="card-header">
<strong class="card-title"><h3>Assignment categories</h3></strong>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th class="text-center">#</th>
<th class="text-center">Subjects</th>
<th class="text-center">Questions</th>
<th class="text-center">Files</th>
</tr>
</thead>

<?php
$count=0;
$res=mysqli_query($con,"select *  from assignment");
while($row=mysqli_fetch_array($res))
{
	$count=$count+1;
	?>
	<tr>
<td><?php echo $count;?></td>
<td><?php echo $row["subject"];?></td>
<td><?php echo "<img src='images/".$row['pdf']."'>";?></td>
<td><a href="selectassignment.php?id=<?php echo $row["id"];?>">Select</a></td>
</tr>
<?php
}
?>

</table>
</div>
</div>
</div>
</div>
</div>