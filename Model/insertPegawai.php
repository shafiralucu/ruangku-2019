<?php
    require '../Controller/Connector.php';
		if (isset($_POST['btnInsert'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $no_hp = $_POST['nohp'];
            $jabatan = $_POST['jabatan'];
				$query = "INSERT INTO pegawai (nama, email, no_hp , jabatan) VALUES ('$nama' , '$email','$no_hp' , '$jabatan')";
                $db->executeNonSelectedQuery($query);
                header('Location: ../View/ADMIN-CUSTOMER.php');
        }
?>