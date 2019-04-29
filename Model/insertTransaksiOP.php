<?php
    require 'Connector.php';
		if (isset($_POST['btnInsert'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['nohp'];
            $alamat = $_POST['alamat'];

            $waktuMulai = $_POST['mulai'];
            $waktuAkhir = $_POST['akhir'];
            $durasi = $_POST['durasi'];

            $nama = $db->escapeString($nama);
            $email = $db->escapeString($email);
            $no_hp = $db->escapeString($no_hp);
            $alamat = $db->escapeString($alamat);

            $waktuMulai = $db->escapeString($waktuMulai);
            $waktuAkhir = $db->escapeString($waktuAkhir);
            $durasi = $db->escapeString($durasi);

            $query = "INSERT INTO pelanggan (nama, alamat, email, no_hp) VALUES ('$nama' , '$alamat' , '$email','$no_hp')";
            $query2 = "INSERT INTO transaksi (durasi_sewa) VALUES ('$durasi')";
            $db->executeNonSelectedQuery($query);
            $db->executeNonSelectedQuery($query2);
            header('Location: ../OPERATOR-COMPLETE.php');
        }
?>