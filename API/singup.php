<?php

include 'config.php';

	
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

	 $sql =  "INSERT INTO user (username, pass, role) VALUES ('$username','$pass','$role')";
	 $query = mysqli_query($conn, $sql);

    if ($query) {
		 echo json_encode(array('message'=>'student data successfully added.'));
	}else{
		die("Gagal menyimpan perubahan...");
	}


?>

