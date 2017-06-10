<?php
include "koneksi.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
		$respon = array();
		$judul = $_POST['judul'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];

		$respon = array();
			$result = mysqli_query($h, "INSERT INTO lokasi(judul, lat, lng) VALUES('$judul', '$lat', '$lng' )");
			if($result){
				$respon["status"] = 1;
			}else{
				$respon["status"] = 0;
			}
			echo json_encode($respon);
	}
?>
