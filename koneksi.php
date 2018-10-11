<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "aplikasipendaftaran";
 $con     = new mysqli($hostname, $username, $pass, $db);

 if($con==false){

  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nama					 =$_POST['nama'];
   $nim				     =$_POST['nama'];
   $kelas				   =$_POST['kelas'];
   $jeniskelamin	 =$_POST['jeniskelamin'];
   $fakultas		   =$_POST['fakultas'];
   $hobi			     =$_POST['hobi'];
   $alamat				 =$_POST['alamat'];
   $password       =$_POST['password'];

 
 $sql="INSERT INTO aplikasipendaftaran(nama,nim,kelas,jeniskelamin,fakultas,hobi,alamat,password) VALUES ('$nama','$nim','$kelas','$jeniskelamin','$fakultas','$hobi','$alamat',$password)";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
    echo " <a href='login.php'>klik</a> untuk ke login";
   }else{
    echo "Database Gagal";;
   }
}
 ?>
