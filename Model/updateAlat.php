<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnUpdate'])) {
            $namaold = $_POST['namaold'];
            $nama = $_POST['nama'];
            $jumlah = $_POST['jumlah'];
            $tarif = $_POST['tarif'];
			$query = "UPDATE alat SET namaAlat = '$nama' , tarif = '$tarif' ,  jumlah = '$jumlah' WHERE namaAlat = '$namaold'";
            $db->executeNonSelectedQuery($query);
            header('Location: ../View/MANAJER-BARANG.php');
        }
?>