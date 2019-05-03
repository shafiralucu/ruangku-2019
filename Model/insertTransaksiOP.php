<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnBook'])) {
            //untuk pelanggan
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['nohp'];
            $alamat = $_POST['address'];

            //untuk transaksi
            $waktuMulai = $_POST['waktu_mulai'];
            $waktuAkhir = $_POST['waktu_akhir'];

            $nama = $db->escapeString($nama);
            $email = $db->escapeString($email);
            $no_hp = $db->escapeString($no_hp);
            $alamat = $db->escapeString($alamat);

            //untuk update alat
            $choices = $_POST['check_list'];
            for ($i=0; $i<sizeof ($choices);$i++) {  
                $query3="UPDATE alat SET status_booking = '1' WHERE namaAlat = '".$choices[$i]. "'"; 
            }

            //tanggal
            date_default_timezone_set("Asia/Bangkok");
            $my_date = date("Y-m-d H:i:s");

            //untuk update ruangan sehingga status book berubah
            $namaRuang = $_POST['ruangan'];
            $queryUpdateRuangan = "UPDATE ruang SET status_booking = '1' WHERE namaRuang = '$namaRuang'";

            //query get harga ruangan
            $qGetHargaRuangan = "SELECT harga FROM ruang WHERE namaRuang = '$namaRuang'";
            $db->executeSelectQuery($qGetHargaRuangan);
            //$rows2 = mysql_fetch_assoc($qGetHargaRuangan);
            $totalTransaksi = $qGetHargaRuangan * ($waktuAkhir - $waktuMulai);
            //query insert
            $query = "INSERT INTO pelanggan (nama, alamat, email, no_hp) VALUES ('$nama' , '$alamat' , '$email','$no_hp')";
            $query2 = "INSERT INTO transaksi (tanggal_transaksi , waktu_awal , waktu_akhir , total_transaksi) VALUES ('$my_date' , '$waktuMulai' , '$waktuAkhir' , '$totalTransaksi')";

            //untuk get id fk dan memasukkan ke tabel fk(tabel relasi)
            $queryGet = "SELECT idTransaksi FROM transaksi WHERE tanggal_transaksi = '$my_date'";
            $queryGet2 = "SELECT idPelanggan FROM pelanggan WHERE nama = '$nama'";
            $db->executeSelectQuery($queryGet2);
            $db->executeSelectQuery($queryGet);
            $q = "INSERT INTO melakukan (idPelanggan , idTransaksi) VALUES($queryGet2 , $queryGet)";
            
            //$rows = mysql_fetch_assoc($queryGet2);
            //query insert
            $db->executeSelectQuery($queryGet2);
            $db->executeNonSelectedQuery($query);
            $db->executeNonSelectedQuery($query2);
            $db->executeNonSelectedQuery($query3);
            $db->executeNonSelectedQuery($queryUpdateRuangan);
            $db->executeNonSelectedQuery($q);
            header('Location: ../View/OPERATOR-COMPLETE.php');
        }
?>