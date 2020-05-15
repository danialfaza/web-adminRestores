<?php

include 'config.php';

	
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $jumlah = $_POST['jumlah'];
    $nama = $_POST['nama'];

	 $sql =  "INSERT INTO booking (tanggal, jam, jumlah, nama) VALUES ('$tanggal','$jam','$jumlah', '$nama')";
	 $query = mysqli_query($conn, $sql);

    if ($query) {
		 echo json_encode(array('message'=>'data successfully added.'));
	}else{
		die("Gagal menyimpan perubahan...");
	}


?>

