<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnUpdate'])) {
            $namaold = $_POST['namaold'];
            $nama = $_POST['nama'];
            $kapasitas = $_POST['kapasitas'];
            $fasilitas = $_POST['fasilitas'];
            $harga = $_POST['harga'];
			$query = "UPDATE ruang SET namaRuang = '$nama' , kapasitas = '$kapasitas' ,  fasilitas = '$fasilitas' , tarif = '$harga' WHERE namaRuang = '$namaold'";
            $db->executeNonSelectedQuery($query);
            header('Location: ../View/MANAJER-RUANGAN.php');
        }
?>