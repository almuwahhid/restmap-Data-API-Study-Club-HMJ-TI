<?php
	include "koneksi.php";
			$respon = array();
			$result = mysqli_query($h, "SELECT * FROM lokasi");
			if (mysqli_num_rows($result) > 0) {
				$respon["data"] = array();
				while ($row = mysqli_fetch_array($result)) {
					$berita = array();
					$berita["judul"] = $row["judul"];
					$berita["lat"] = $row["lat"];
					$berita["lng"] = $row["lng"];
					array_push($respon["data"], $berita);
				}
				$respon["status"] = 1;
				echo json_encode($respon);
			} else {
				$respon["status"] = 0;
				echo json_encode($respon);
			}
?>
