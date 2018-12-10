<?php
include('conn.php');

	session_start();
	if (!empty($_SESSION['usrxreidx']))
	{
		header('location:home');
	}
?>
<html lang="en">
<head>
	<title>Welcome To Reid</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/util.css">
	<link rel="stylesheet" type="text/css" href="login/main.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->
<style>
.mySlides {display:none;}
</style>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt />
<center>	
<div class="w3-content" style="max-width:400px">
<div class="mySlides">
  <img src="images/sp4.png" style="width:80%">
</div>
</div>
</center>


				</div>
<script type="text/javascript">
var slideIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 3000); 
}
</script>
				
				<form class="login100-form validate-form" method="post" action="login.php">
					<span class="login100-form-title">
					<center><img src="images/logo.png" style="width:70%" alt="IMG"></center>
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="eml" placeholder="Kode / Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" value="masuk" name="kirim" class="login100-form-btn"> 
					</div>
				</form>

			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/popper.js"></script>
	<script src="login/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login/main.js"></script>

</body>
</html>