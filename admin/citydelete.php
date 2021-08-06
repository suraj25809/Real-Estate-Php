<?php
include("config.php");
$cid = $_GET['id'];
$sql = "DELETE FROM city WHERE cid = {$cid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>City Deleted</p>";
	header("Location:cityadd.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>City Not Deleted</p>";
	header("Location:cityadd.php?msg=$msg");
}
mysqli_close($con);
?>
