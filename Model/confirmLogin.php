<?php
	include_once '../View/LOGIN.php';
    require '../Controller/Connector.php';
		if (isset($_POST['btnLogin'])) {
            $username = $_POST['nama'];
            $pass = $_POST['pass'];

            $username = $db->escapeString($username);
            $pass = $db->escapeString($pass);

            $query = "SELECT jabatan FROM pegawai WHERE nama = '$username' AND password ='$pass'";
            $result =$db->executeNonSelectedQuery($query);
            $res="";
            while ($row=mysqli_fetch_row($result))
            {
                $res =$row[0];
            }
            
            if($res == "manager"){
                header('Location: ../View/MANAJER-RUANGAN.php');
                
            }
            else if($res == "operator"){
                header('Location: ../View/OPERATOR-TRANSAKSI1.php');
               
            }
            else if($res == "admin"){
                header('Location: ../View/ADMIN-CUSTOMER.php');
            
            }
            else {
                header('Location: ../View/LOGIN.php');
            }
		}
	
?>