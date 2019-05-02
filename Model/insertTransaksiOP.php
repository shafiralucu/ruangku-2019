<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnBook'])) {
            //untuk pelanggan
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['nohp'];
            $alamat = $_POST['address'];

            //untuk transaksi
            $waktuMulai = $_POST['mulai'];
            $waktuAkhir = $_POST['akhir'];
            $durasi = $_POST['durasi'];

            $nama = $db->escapeString($nama);
            $email = $db->escapeString($email);
            $no_hp = $db->escapeString($no_hp);
            $alamat = $db->escapeString($address);

            //untuk update alat
            $choices = $_POST['check_list'];

            //untuk get id fk dan memasukkan ke tabel fk(tabel relasi)
            $queryGet = "SELECT idTransaksi FROM transaksi";
            $queryGet2 = "SELECT idPelanggan FROM pelanggan WHERE nama = '$nama'";
            echo $queryGet2;

            for ($i=0; $i<sizeof ($choices);$i++) {  
                $query3="UPDATE alat SET status_booking = '1' WHERE namaAlat = '".$choices[$i]. "'"; 
            }
            $durasi = $db->escapeString($durasi);

            $query = "INSERT INTO pelanggan (nama, alamat, email, no_hp) VALUES ('$nama' , '$alamat' , '$email','$no_hp')";
            $query2 = "INSERT INTO transaksi (durasi_sewa) VALUES ('$durasi')";
            $q = "INSERT INTO melakukan (idPelanggan) VALUES('$queryGet2')";

            $db->executeNonSelectedQuery($query);
            $db->executeNonSelectedQuery($query2);
            $db->executeNonSelectedQuery($query3);
            $db->executeNonSelectedQuery($q);
            header('Location: ../View/OPERATOR-COMPLETE.php');
        }
?>