<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnUpdate'])) {
            $tanggal1 = $_POST['tanggal1'];
            $tanggal2 = $_POST['tanggal2'];
            echo $tanggal1;
            echo $tanggal2;
            $querySelect = "SELECT * FROM alat INNER JOIN sewa_alat ON alat.idAlat = sewa_alat.idAlat INNER JOIN transaksi ON sewa_alat.idTransaksi = transaksi.idTransaksi WHERE tanggal_transaksi >= '$tanggal1' AND tanggal_transaksi <= '$tanggal2'";
            $db->executeNonSelectedQuery($querySelect);
            header('Location: ../View/MANAJER-ALAT.php');
        }
        
?>