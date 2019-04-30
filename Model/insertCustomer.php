<?php
    require 'Connector.php';
		if (isset($_POST['btnInsert'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['nohp'];
            $tanggaltransaksi = $_POST['tanggaltransaksi'];
            $alamat = $_POST['alamat'];
				$query = "INSERT INTO pelanggan (nama, alamat, email, no_hp , tanggal_transaksi) VALUES ('$nama' , '$alamat' , '$email','$no_hp' , '$tanggaltransaksi')";
                $db->executeNonSelectedQuery($query);
                header('Location: ../ADMIN-CUSTOMER.php');
        }
?>