<?php

    require '../Controller/Connector.php';
		if (isset($_POST['btnInsert'])) {
            $namaRuangan = $_POST['nama'];
            $kapasitas = $_POST['kapasitas'];
            $fasilitas = $_POST['fasilitas'];
            $harga = $_POST['harga'];
            $status = "available";
                $namaRuangan = $db->escapeString($namaRuangan);
                $kapasitas = $db->escapeString($kapasitas);
                $fasilitas = $db->escapeString($fasilitas);
                $harga = $db->escapeString($harga);
				$query = "INSERT INTO ruang (namaRuang, kapasitas, fasilitas, tarif, status_booking) VALUES ('$namaRuangan' , '$kapasitas' , '$fasilitas','$harga' , '$status')";
                $db->executeNonSelectedQuery($query);
                header('Location: ../View/ADMIN-RUANGAN1.php');
        }
?>