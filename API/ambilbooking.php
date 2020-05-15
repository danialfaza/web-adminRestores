<?php 
	include 'config.php';

	$sql = "SELECT * FROM booking ";
	$result = array();
	$query = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($query)){
		array_push($result, array(
			'id' => $row['id'],
	    	'tanggal' => $row['tanggal'],
	    	'jumlah' => $row['jumlah'],
	    	'jam' => $row['jam'],
			'nama' => $row['nama'],
			
		));
	}
	echo json_encode(array("result" => $result));
?>