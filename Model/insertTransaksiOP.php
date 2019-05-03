<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnBook'])) {

            //untuk update ruangan sehingga status book berubah
            $namaRuang = $_POST['ruangan'];
            $queryUpdateRuangan = "UPDATE ruang SET status_booking = '1' WHERE namaRuang = '$namaRuang'";
            $db->executeNonSelectedQuery($queryUpdateRuangan);
            

            //untuk mendapat value pelanggan
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
            $waktuMulai = $db->escapeString($waktuMulai);
            $waktuAkhir = $db->escapeString($waktuAkhir);

            //untuk update alat sehingga status book alat berubah
            $choices = $_POST['check_list'];
            for ($i=0; $i<sizeof ($choices);$i++) {  
                $query3="UPDATE alat SET status_booking = '1' WHERE namaAlat = '".$choices[$i]. "'"; 
            }
            $db->executeNonSelectedQuery($query3);

            //tanggal
            date_default_timezone_set("Asia/Bangkok");
            $my_date = date("Y-m-d H:i:s");

            //query get harga ruangan
            $qGetHargaRuangan = "SELECT tarif FROM ruang WHERE namaRuang = '$namaRuang'";
            $result = $db->executeNonSelectedQuery($qGetHargaRuangan);
            $res="";
            while ($row=mysqli_fetch_row($result))
            {
                $res =$row[0];
            }

            //query get harga alat
            for ($i=0; $i<sizeof ($choices);$i++) {  
                $qGetHargaAlat = "SELECT tarif FROM alat WHERE namaAlat = '".$choices[$i]. "'"; 
            }
            
            $resultHargaAlat = $db->executeNonSelectedQuery($qGetHargaAlat);
            $resHargaAlat="";
            while ($row=mysqli_fetch_row($resultHargaAlat))
            {
                $resHargaAlat =$row[0];
            }

            //menghitung total transaksi
            $totalTransaksi = ($res * ($waktuAkhir - $waktuMulai)) + $resHargaAlat;

            //query insert ke tabel pelanggan dan transaksi
            $query = "INSERT INTO pelanggan (nama, alamat, email, no_hp) VALUES ('$nama' , '$alamat' , '$email','$no_hp')";
            $query2 = "INSERT INTO transaksi (tanggal_transaksi , waktu_awal , waktu_akhir , total_transaksi) VALUES ('$my_date' , '$waktuMulai' , '$waktuAkhir' , '$totalTransaksi')";
            $db->executeNonSelectedQuery($query);
            $db->executeNonSelectedQuery($query2);

            //berhasil sampai baris sini, code works fine//

            //untuk get id fk dan memasukkan ke tabel fk(tabel relasi)
            $queryGet = "SELECT idTransaksi FROM transaksi";
            $resultIdTransaksi = $db->executeNonSelectedQuery($queryGet);
            $res1="";
              while ($row=mysqli_fetch_row($resultIdTransaksi))
              {
                  $res1 = $row[0];
              }

            $queryGet2 = "SELECT idPelanggan FROM pelanggan WHERE nama = '$nama'";
            $resultIdPelanggan = $db->executeNonSelectedQuery($queryGet2);
            $res2="";
            while ($row=mysqli_fetch_row($resultIdPelanggan))
            {
                $res2 = $row[0];
            }

            $q = "INSERT INTO melakukan (idPelanggan , idTransaksi) VALUES ('$res2' , '$res1')";
            $db->executeNonSelectedQuery($q);

            //Query ke tabel Sewa Alat
            for ($i=0; $i<sizeof ($choices);$i++) {  
                $queryGetAlat = "SELECT idAlat FROM alat WHERE namaAlat = '".$choices[$i]. "'";
            }
            $resultIdAlat = $db->executeNonSelectedQuery($queryGetAlat);
            $res3="";
            while ($row=mysqli_fetch_row($resultIdAlat))
            {
                $res3 = $row[0];
            }
            $querySewaAlat = "INSERT INTO sewa_alat (idAlat , idTransaksi) VALUES('$res3' , '$res1')";
            $db->executeNonSelectedQuery($querySewaAlat);

            //Query ke tabel Sewa Ruang
            $queryGetRuang = "SELECT idRuang FROM ruang WHERE namaRuang = '$namaRuang'";
            $resultIdRuang = $db->executeNonSelectedQuery($queryGetRuang);
            $res4="";
            while ($row=mysqli_fetch_row($resultIdRuang))
            {
                $res4 = $row[0];
            }
            $querySewaRuang = "INSERT INTO sewa_ruang (idRuang , idTransaksi) VALUES('$res4' , '$res1')";
            $db->executeNonSelectedQuery($querySewaRuang);
            
            header('Location: ../View/OPERATOR-COMPLETE.php');
        }
?>