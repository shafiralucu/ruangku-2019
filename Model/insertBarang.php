<?php
    require 'Connector.php';
		if (isset($_POST['btnInsert'])) {
            $namaBarang = $_POST['nama'];
            $kapasitas = $_POST['kapasitas'];
            $harga = $_POST['harga'];
            $status = "available";
                $namaBarang = $db->escapeString($namaBarang);
                $kapasitas = $db->escapeString($kapasitas);
                $harga = $db->escapeString($harga);
                $status = $db->escapeString($status);
				$query = "INSERT INTO alat (namaAlat, tarif, status_booking) VALUES ('$namaBarang' , '$harga' , '$status')";
                $db->executeNonSelectedQuery($query);
                header('Location: ../ADMIN-BARANG.php');
        }
?>