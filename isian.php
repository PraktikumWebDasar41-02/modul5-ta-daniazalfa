<form method="POST">
	<table>
		<tr>
			<td>NIM :</td>
			<td><input type="number" name="nim" required></td>
		</tr>
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" placeholder="@gmail.com" required></td>
		</tr>
		<tr>
			<td>Komentar :</td>
			<td><input type="text" name="komentar" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir :</td>
			<td><input type="date" name="tanggal" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin :</td>
			<td>
				<input type="radio" name="gender" value="Perempuan">Perempuan <br>
				<input type="radio" name="gender" value="Laki-Laki">laki-laki
			</td>
		</tr>
		<tr>
			<td>Program Studi :</td>
			<td><select name="programstudi">
				<option value="MI">Manajemen informatika</option>
				<option value="DKV">Desain komunikasi visual</option>
				<option value="MBTI">MBTI</option>
				<option value="ILKOM">Ilmu komputer</option>
				<option value="TT">Teknik Telekomunikasi</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas :</td>
			<td><select name="fak">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FKB">FKB</option>
				<option value="FEB">FEB</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>

<?php
include 'conn.php';

if (isset($_POST['submit'])) {

	if (strlen($_POST['nim'])==10){
	$nim1 = $_POST['nim'];
	}else{
		echo "NIM Harus berisi 10 angka"."<br>";
	}

	if (strlen($_POST['nama'])<25){
		$nama1 = $_POST['nama'];
	}else{
		echo "Nama Harus berisi Kurang dari 25 huruf"."<br>";
	}

	if (!strpos($_POST['email'], "@")||!strpos($_POST['email'], ".com")) {
		echo "Email anda tidak sesuai"."<br>";
	}else{
		$email1 = $_POST['email'];
	}

	$komentar1 = $_POST['komentar'];
	$tanggal1 = $_POST['tanggal'];
	$programstudi1 = $_POST['programstudi'];
	$fakultas1 = $_POST['fak'];
	if (isset($_POST['gender'])) {
		$gender1 = $_POST['gender'];
	}
	
	session_start();

	$_SESSION['id'] = $nim1;
	$_SESSION['nm'] = $nama1;
	
	$qry = "INSERT INTO t_jurnal1 VALUES ($nim1,'$nama1','$email1','$komentar1','$tanggal1','$gender1','$programstudi1','$fakultas1')";
	$tambah=$simpan->query($qry);
	if($tambah==true){
		echo "Berhasil";
		header("Location:hasil.php");
	}else{
		echo "Gagal";
	}	

}

 ?>
