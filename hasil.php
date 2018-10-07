<?php
session_start();
include 'conn.php';
$nim2 = $_SESSION['id'];
$nama2=$_SESSION['nm'];

$qry = "SELECT * FROM t_jurnal1 WHERE nim = '$nim2'";
$hasil=$simpan->query($qry);
if($hasil==true){
	foreach($hasil as $value){
		$nama2=$value['nama'];
		$nim2=$value['nim'];
		$email2=$value['email'];
		$komentar2=$value['komentar'];
		$tanggal2=$value['tanggallahir'];
		$gender2=$value['jeniskelamin'];
		$programstudi2=$value['jurusan'];
		$fakultas2=$value['fakultas'];
	}
}
	

?>


<form method="post">
<table>
	<tr>
		<td>Nama :</td>
		<td><?php echo $nama2."<br>"; ?></td>
	</tr>
	<tr>
		<td>NIM :</td>
		<td><?php echo $nim2."<br>"; ?></td>
	</tr>
	<tr>
		<td>Email :</td>
		<td><?php echo $email2."<br>"; ?></td>
	</tr>
	<tr>
		<td>komentar :</td>
		<td><?php echo $komentar2."<br>"; ?></td>
	</tr>
	<tr>
		<td>Tanggal lahir :</td>
		<td><?php echo $tanggal2."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jenis kelamin :</td>
		<td><?php echo $gender2."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jurusan :</td>
		<td><?php echo $programstudi2."<br>"; ?></td>
	</tr>
	<tr>
		<td>fakultas :</td>
		<td><?php echo $fakultas2."<br>"; ?></td>
	</tr>

	<tr>
		<td><input type="submit" name="keluar" value="Input baru"></td>
	</tr>
</table>

</form>
<?php
if (isset($_POST['keluar'])) {
	session_destroy();
	header("Location:isian.php");
}
 ?>
