<?php
    require 'Connector.php';
		if (isset($_POST['btnDelete'])) {
            $namaRuang = $_POST['nama'];
            $namaRuang = $db->escapeString($namaRuang);
			$query ="DELETE FROM ruang WHERE namaRuang = '$namaRuang'";
            $db->executeNonSelectedQuery($query);
            header('Location: ../ADMIN-RUANGAN1.php');
        }
?>