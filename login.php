<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>



		<form action="" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">

			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="index.html">kembali</a><br><br>
				<a class="link" href="https://www.facebook.com/x.marshall.5">Copyright &copy; 2019 - MarsHall</a>
			</center>
		</form>
		<?php

			if(isset($_POST['Username'])){

				$Username = $_POST['Username'];
				$Password = $_POST['Password'];

				echo "<br>";
				echo "$Username";
				echo "<br>";
				echo "$Password";
				
			}

		?>
	</div>


</body>
</html>