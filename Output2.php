<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Ke-2</title>
</head>
<body>
    <center><h1>Output Pertemuan 2</h1></center>

</body>
<?php
     function perkenalan($nama, $umur, $jeniskelamin, $alamat, $prodi)
     {
        echo"<br> Nama : ".$nama;
        echo"<br> Umur : ".$umur;
        echo"<br> Jenis Kelamin : ".$jeniskelamin;
        echo"<br> Alamat : ".$alamat;
        echo"<br> Prodi : ".$prodi;
     }
     perkenalan("Moh Asep Muhammed",19,"L","Kab. Sampang","Teknik Informatika<br>");
     perkenalan("Alfi Nur.D",20,"L","Sidoarjo","Teknik Informatika<br>");
     perkenalan("Dia Dicksy.A",20,"L","Surabaya","Teknik Informatika<br>");
?>
</html>