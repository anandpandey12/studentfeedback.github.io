<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from HOD where id='$info'");
	header('location:dashboard.php?info=show_HOD');
?>