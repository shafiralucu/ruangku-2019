<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnInsert'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['nohp'];
            $tanggaltransaksi = $_POST['tanggaltransaksi'];
            $alamat = $_POST['alamat'];
                $namaRuangan = $db->escapeString($namaRuangan);
                $kapasitas = $db->escapeString($kapasitas);
                $fasilitas = $db->escapeString($fasilitas);
                $harga = $db->escapeString($harga);
				$query = "INSERT INTO pelanggan (nama, alamat, email, no_hp , tanggal_transaksi) VALUES ('$nama' , '$alamat' , '$email','$no_hp' , '$tanggaltransaksi')";
                $db->executeNonSelectedQuery($query);
                header('Location: ../View/ADMIN-CUSTOMER.php');
        }
?>