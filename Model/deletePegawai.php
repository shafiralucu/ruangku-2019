<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnDelete'])) {
            $namaPegawai = $_POST['nama'];
            $namaPegawai = $db->escapeString($namaPegawai);
			$query ="DELETE FROM pegawai WHERE nama = '$namaPegawai'";
            $db->executeNonSelectedQuery($query);
            header('Location: ../View/ADMIN-CUSTOMER.php');
        }
?>