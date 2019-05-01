<?php
    require 'Connector.php';
		if (isset($_POST['btnDelete'])) {
            $namaPelanggan = $_POST['nama'];
            $namaPelanggan = $db->escapeString($namaPelanggan);
			$query ="DELETE FROM pelanggan WHERE nama = '$namaPelanggan'";
            $db->executeNonSelectedQuery($query);
            header('Location: ../ADMIN-CUSTOMER.php');
        }
?>