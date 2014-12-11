<?php include("mulai2.php");?>
<?php session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
<center>
 
<form action="proses_daftar.php" method="post">
<table>
<tbody>
<tr>
<td colspan="2" align="center">
<h1>Daftar Baru</h1>
</td>
</tr>
<tr>
<td>Nama : </td>
<td> <input type="text" name="nama" /></td>
</tr>
<tr>
<td>Email : </td>
<td> <input type="email" name="email" /></td>
</tr>
<tr>
<td>Username : </td>
<td> <input type="text" name="username" /></td>
</tr>
<tr>
<td>Password : </td>
<td> <input type="password" name="pass" /></td>
</tr>
<tr>
<td>Ulangi Password : </td>
<td> <input type="password" name="ulangi_pass" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Daftar" /> <input type="reset" value="Batal" /></td>
</tr>
<tr>
<td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td>
</tr>
</tbody>
</table>
</form>
</center>
<?php include("selesai.php");?>