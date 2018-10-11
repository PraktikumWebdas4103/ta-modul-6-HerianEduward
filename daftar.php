<form action="koneksi.php" method="POST">
	<center><h1>Aplikasi Pendaftaran</h1>

	<table>
		<tr>
			<td>Nama</td>
			<td><input type="nama" name="nama" maxlength="35" placeholder="Nama" required="silahkan mengsisi nama"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td><input type="number" name="nim" maxlength="10" placeholder="Masukkan NIM" required="silahkan mengsisi nim"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="radio" name="kelas" value="D3MI4101">D3MI4101<br>
				<input type="radio" name="kelas" value="D3MI4102">D3MI4102<br>
				<input type="radio" name="kelas" value="D3MI4103">D3MI4103<br>
				<input type="radio" name="kelas" value="D3MI4104">D3MI4104<br>
		</td>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki<br>
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td><input type="checkbox" name="hobi" value="Berenang">Berenang<br>
				<input type="checkbox" name="hobi" value="Makan">Makan<br>
				<input type="checkbox" name="hobi" value="Jalan">Jalan<br>
				<input type="checkbox" name="hobi" value="Game">Game<br>
				<input type="checkbox" name="hobi" value="Olahraga">Olahraga<br>
				<input type="checkbox" name="hobi" value="Program">Program<br>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select name="fakultas" id="fakultas">
					<option value="FKB">FKB</option>
  					<option value="FIT">FIT</option>
  					<option value="FIK">FIK</option>
  					<option value="FEB">FEB</option>
  					<option value="FTE">FTE</option>	
  			</select>
  		</tr>
  		<tr>
  			<td>Alamat</td>
  			<td><textarea name="alamat" rows="5" cols="40" placeholder="Masukkan ALamat Sesuai KTP"required="silahkan mengsisi alamat"></textarea></td>
  		</tr>
  		<tr>
  			<td>Password</td>
  			<td><input type="Password" name="password">
  		</td>
  		<tr>
  		<td>submit</td>
  		<td><input type="submit" name="submit" value="kirim">
  		</tr>
	</table>
</form>


<?php
if (isset($_POST['submit'])) {
   $nama					=$_POST['nama'];
   $nim				     	=$_POST['nama'];
   $kelas				 	=$_POST['kelas'];
   $jeniskelamin	 		=$_POST['jeniskelamin'];
   $fakultas		  	 	=$_POST['fakultas'];
   $hobi			     	=$_POST['hobi'];
   $alamat				 	=$_POST['alamat'];
   $password				+$_POST['password'];
   $Error = array();

   if (strlen($_POST['nama'])<=35) {
    $error['nama']=="nama harus max 35";

   }if(strlen($_POST['nim'])<=10){
    $error['nim']=="nim max 10";

   }if (empty($kelas)) {
    $error['kelas']=="kelas tidak boleh kosong";

   }if (empty($jeniskelamin)) {
    $error['jeniskelamin']=="jeniskelamin tidak boleh kosong";

   }if (empty($fakultas)) {
    $error['fakultas']=="fakultas tidak boleh kosong";

   }if (empty($hobi)) {
    $error['hobi']=="hobi tidak boleh kosong";

   }if (empty($alamat)) {
    $error['alamat']=="alamat tidak boleh kosong";

   }if (empty($password)) {
    $error['password']=="password tidak boleh kosong";
}
}

?>