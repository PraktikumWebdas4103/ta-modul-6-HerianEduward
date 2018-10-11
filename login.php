<form action=" halamanawal.php" method="POST">
<center><h1>Login</h1>
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" placeholder="id"></td>
		</tr>
		<tr>
	 		<td>Password</td>
	 		<td><input type="Password" name="Password" placeholder="password"></td>
	 	</tr>
	 	<tr>
	 		<td><input type="submit" name="Login" value="login"></td>
	 	</tr>
	 </table>
</center>
		</form>
<?php
session_start();

		if(isset($_POST['Login'])){
			$id = $_POST['id'];
			$password = $_POST['password'];
			$query = "SELECT * FROM `aplikasipendaftaran` WHERE id = '$id' and password = '$password'"
			$result = mysqli_query($conn,$query);

			if(mysqli_num_rows($result) > 0){
				$_session['id']=$id;
				header("location:daftar.php");
			}else{
				header("location:koneksi.php");
			}

		}
?>