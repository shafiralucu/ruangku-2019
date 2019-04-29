<?php
	include_once '../LOGIN.php';
    require 'Connector.php';
		if (isset($_POST['btnLogin'])) {
            $username = $_POST['nama'];
            $pass = $_POST['pass'];

            $username = $db->escapeString($username);
            $pass = $db->escapeString($pass);

            $query = "SELECT jabatan FROM pegawai WHERE nama = '$username'";
            $result =$db->executeNonSelectedQuery($query);
            $res="";
            while ($row=mysqli_fetch_row($result))
            {
                $res =$row[0];
            }
            
            if($res == "manager"){
                header('Location: ../MANAJER-RUANGAN.php');
                
            }
            else if($res == "operator"){
                header('Location: ../OPERATOR-RUANGAN.php');
               
            }
            else if($res == "admin"){
                header('Location: ../ADMIN-RUANGAN1.php');
            
            }
            else {
                header('Location: ../LOGIN.php');
            }
		}
	
?>