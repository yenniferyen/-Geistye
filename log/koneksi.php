<?php include("mulai2.php");?>
<?php $host = "localhost";
 $user = "root"; $pass = ""; 
 $db = "uas"; 
 $konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! '); 
 mysql_select_db($db); ?>
<?php include("selesai.php");?>