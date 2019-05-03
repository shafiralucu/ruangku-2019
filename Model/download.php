<?php
$servername    = "localhost";
$username    = "root";
$password    = "";
$dbname        = "mibd2019";
$conn    = mysqli_connect ($servername, $username, $password, $dbname);

if (!$conn){
    die ("Connection Failed: ". mysqli_connect_error());
    }

// Koneksi library FPDF
require('../fpdf/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A5');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'Daftar Ruangan di Ruangku.com',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'create to collaborate.',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'NAMA RUANG',1,0);
$pdf->Cell(35,6,'KAPASITAS',1,0);
$pdf->Cell(30,6,'FASILITAS',1,0);
$pdf->Cell(25,6,'HARGA',1,0);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($conn, "SELECT namaRuang , kapasitas, fasilitas, tarif FROM ruang");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,7,'',0,1);
    $pdf->Cell(50,6,$row['namaRuang'],1,0);
    $pdf->Cell(35,6,$row['kapasitas'],1,0);
    $pdf->Cell(30,6,$row['fasilitas'],1,0);
    $pdf->Cell(25,6,$row['tarif'],1,0);
}

$pdf->Output();

?>