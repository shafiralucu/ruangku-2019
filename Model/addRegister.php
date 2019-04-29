<?php
	include_once '../LOGIN.php';
    require 'Connector.php';
		if (isset($_POST['btnRegister'])) {
            $username = $_POST['username'];
            $id = $_POST['idKaryawan'];
            $pass = $_POST['password'];
            $jabatan = $_POST['jabatan'];
                $username = $db->escapeString($username);
                $id = $db->escapeString($id);
                $pass = $db->escapeString($pass);
                $jabatan = $db->escapeString($jabatan);
				$query = "INSERT INTO pegawai (username, id, jabatan, password) VALUES ('$username' , '$id' , '$jabatan','$pass')";
				$db->executeNonSelectedQuery($query);
			header('Location: LOGIN.php');
		}
	
?>
