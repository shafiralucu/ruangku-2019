<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnUpdate'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['nohp'];
            $jabatan = $_POST['jabatan'];
			$query = "UPDATE pegawai SET nama = '$nama' , no_hp = '$no_hp' ,  email = '$email' , jabatan = '$jabatan' WHERE id = '2'";
            $db->executeNonSelectedQuery($query);
            header('Location: ../View/ADMIN-CUSTOMER.php');
        }
?>