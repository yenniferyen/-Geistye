<?php include("mulai2.php");?>
<?php require_once("koneksi.php");

$username = $_POST['username'];
$pass = $_POST['pass'];
$cekuser = mysql_query("SELECT * FROM uas WHERE password = '$pass'");
if(mysql_num_rows($cekuser) &lt;&gt; 0) {
echo "Username Sudah Terdaftar!";
echo "<a href="home.php">&amp;amp;laquo; Back</a>";
} else {
if(!$username || !$pass) {
echo "Masih ada data yang kosong!";
echo "<a href="daftar.php">&amp;amp;laquo; Back</a>";
} else {
$simpan = mysql_query("INSERT INTO user(username, password) VALUES('$username','$pass')");
if($simpan) {
echo "Pendaftaran Sukses, Silahkan <a href="login.php">Login</a>";
} else {
echo "Proses Gagal!";
}
}
}
?>
<?php include("selesai.php");?>