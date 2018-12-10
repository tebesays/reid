<?php
include('conn.php');

session_start();

//tangkap data dari form login
$eml = $_POST['eml'];
//$password = $_POST['pwd'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysqli_real_escape_string($conn,$eml);
//$password = mysqli_real_escape_string($conn,$password);

	$query = mysqli_query($conn, "SELECT * FROM user where email='$eml'");
	if (mysqli_num_rows($query) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login

	while ($cl = mysqli_fetch_array($query)) 
	{
			$_SESSION['usrxreidx'] = $cl['username'];
	}	
	
	header("Location:home.php");
	
	}
	else {
		//kalau username ataupun password tidak terdaftar di database
		echo"
			<script language='javascript'>
				window.alert('Mohon maaf email kamu tidak terdaftar silahkan hubungi admin');
				window.location='index';
			</script>
		";
	}
?>