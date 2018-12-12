<?php 

	$id = $_GET["id"];
	$con = mysqli_connect("localhost","root","","baby_nutrition");
	$delete = "DELETE FROM comment WHERE id=$id";
	
	mysqli_query($con,$delete);
	header("location: forum.php");
?>