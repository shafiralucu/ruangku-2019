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

            //query insert
            $qGetHargaRuangan = "SELECT harga FROM ruang WHERE namaRuang = '$namaRuang'";

            $db->executeSelectQuery($qGetHargaRuangan);

            $query = "INSERT INTO pelanggan (nama, alamat, email, no_hp) VALUES ('$nama' , '$alamat' , '$email','$no_hp')";
            $query2 = "INSERT INTO transaksi (tanggal_transaksi) VALUES ('$my_date')";
            //  ,  , '$qGetHargaRuangan'
            //  , waktu_awal, waktu_akhir , total_transaksi
            // $db->executeSelectQuery($qGetHargaRuangan)')
            //untuk get id fk dan memasukkan ke tabel fk(tabel relasi)
            $queryGet = "SELECT idTransaksi FROM transaksi";
            $queryGet2 = "SELECT idPelanggan FROM pelanggan WHERE nama = '$nama'";
            

<<<<<<< HEAD
            //query insert
            $qGetHargaRuangan = "SELECT harga FROM ruang WHERE namaRuang = '$statusRuang'";
            $query = "INSERT INTO pelanggan (nama, alamat, email, no_hp) VALUES ('$nama' , '$alamat' , '$email','$no_hp')";
            $query2 = "INSERT INTO transaksi (waktu_awal, waktu_akhir , tangal_transaksi) VALUES ('$waktuMulai' , '$waktuAkhir' , '$date')";
=======
>>>>>>> c9c3f8da2f90dbda1f205730cb7e32e043ec9e46
            $q = "INSERT INTO melakukan (idPelanggan) VALUES('$db->executeSelectQuery($queryGet2)')";

            $db->executeSelectQuery($queryGet2);
            $db->executeNonSelectedQuery($query);
            $db->executeNonSelectedQuery($query2);
            $db->executeNonSelectedQuery($query3);
            $db->executeNonSelectedQuery($queryUpdateRuangan);
            $db->executeNonSelectedQuery($q);
            header('Location: ../View/OPERATOR-COMPLETE.php');
        }
?>