<?php

	include("config.php");

	// $sql = "SELECT * FROM slideshow";
	$sql = "SELECT * FROM restoran ORDER BY id DESC";
	$result = array();
	$query = mysqli_query($conn, $sql);
	 
	while($row = mysqli_fetch_assoc($query)){
  $result[] = $row;
	}
	echo json_encode(array("result" => $result));
?>

