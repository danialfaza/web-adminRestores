<?php 
	include 'config.php';

	$username = $_POST["username"];
    $pass = $_POST["pass"];


	$sql = "SELECT * FROM user WHERE username = '$username' AND pass='$pass'";
	$result = array();
    $query = mysqli_query($conn, $sql);
    
     while($row = mysqli_fetch_array($query)){
        array_push($result, array(
            'role' => $row['role'],
        ));
    }
    echo json_encode(array("result" => $result));
?>
