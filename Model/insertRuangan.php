<?php

    require '../Controller/Connector.php';
		if (isset($_POST['btnInsert'])) {
            $filename = $_FILES['uploadImage']['name'];
            $namaRuangan = $_POST['nama'];
            $kapasitas = $_POST['kapasitas'];
            $fasilitas = $_POST['fasilitas'];
            $harga = $_POST['harga'];
            $status = 0;

                $namaRuangan = $db->escapeString($namaRuangan);
                $kapasitas = $db->escapeString($kapasitas);
                $fasilitas = $db->escapeString($fasilitas);
                $harga = $db->escapeString($harga);
                $filename = $db->escapeString($filename);
                
				$query = "INSERT INTO ruang (imagesRuang, namaRuang, kapasitas, fasilitas, tarif, status_booking) VALUES ('$filename','$namaRuangan' , '$kapasitas' , '$fasilitas','$harga' , '$status')";
                $db->executeNonSelectedQuery($query);
                header('Location: ../View/ADMIN-RUANGAN1.php');
        }
?>