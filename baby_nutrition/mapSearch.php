<?php
//-----------Database Connection--------
include_once("dbConnector.php");
if(isset($_GET["map"])) {
	$m = $_GET["m"];
	$terms = explode(" ",$m);
	$i = 0;
	$queryMap = "SELECT * FROM map WHERE";
	
	foreach($terms as $each) {
		if($i==0) {
		 	$queryMap .= " keywords LIKE '%$each%'";
			$i++;
		}
		
		if($i > 0) {
			$queryMap .= " OR keywords LIKE '%$each%' ";	
		}
	}//-------for loop-------
	
	$resultMap = mysqli_query($connection,$queryMap);
	if($resultMap) {
		while($row = mysqli_fetch_assoc($resultMap)) {
			$lat = $row["lat"];
			$long = $row["lng"];	
			$hospital = $row["title"];
		}
	}
}//---if(isset($_GET["map"]))---------

else {
	$lat = 23.750601;
	$long = 90.369881;	
	$hospital = "Bangladesh Medical College";
}
?>