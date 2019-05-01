<?php
    require 'Connector.php';
		if (isset($_POST['btnInsert'])) {
            // //path untuk simpan foto yg di upload
            // $target = "images/" .basename ($_FILES['image']['name']);
            // //dapatkan data yg di submit
            // $image = $_FILES['image']['name'];

            $filename = $_FILES['uploadImage']['name'];
            $namaBarang = $_POST['nama'];
            $kapasitas = $_POST['kapasitas'];
            $harga = $_POST['harga'];
            $status = 0;


                $filename = $db->escapeString($filename);
                $namaBarang = $db->escapeString($namaBarang);
                $kapasitas = $db->escapeString($kapasitas);
                $harga = $db->escapeString($harga);
                $status = $db->escapeString($status);


				$query = "INSERT INTO alat (imagesAlat, namaAlat, tarif, status_booking) VALUES ('$filename','$namaBarang' , '$harga' , '$status')";
                $db->executeNonSelectedQuery($query);
                header('Location: ../ADMIN-BARANG.php');
        }
?>