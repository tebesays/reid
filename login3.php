<?php
include('conn.php');

session_start();

//tangkap data dari form login
$username = $_POST['usrnm'];
$password = $_POST['pwd'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

	$query = mysql_query("SELECT * FROM user where username='$username' AND password = '$password'");
	if (mysql_num_rows($query) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	
	header("Location:home.php");
	
	}
	else {
		//kalau username ataupun password tidak terdaftar di database
		echo"
			<script language='javascript'>
				window.alert('Invalid username or password');
				window.location='index.html';
			</script>
		";
	}
?>