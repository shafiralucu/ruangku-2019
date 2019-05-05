<?php
    require '../Controller/Connector.php';
	if (isset($_POST['btnUpdate'])) {
             $tanggal1 = $_POST['tanggal1'];
             $tanggal2 = $_POST['tanggal2'];
             echo $tanggal1;
             echo $tanggal2;
             $querySelect = "SELECT * FROM pelanggan INNER JOIN melakukan ON pelanggan.idPelanggan = melakukan.idPelanggan INNER JOIN transaksi ON melakukan.idTransaksi = transaksi.idTransaksi WHERE tanggal_transaksi >= '$tanggal1' AND tanggal_transaksi <= '$tanggal2'";
             $db->executeNonSelectedQuery($querySelect);
             header('Location: ../View/MANAJER-TRANSAKSIHARIAN.php');
         }
?>