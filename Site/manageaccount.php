<?php
	require_once("connect.php");
	session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<!-- Google Fonts CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Galindo|Fira+Sans+Condensed|Frijole|Press+Start+2P|Crete+Round|Droid+Serif">
	<!-- Font Awesome Icons JS -->
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>	
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/subcontent.css"/>
	
	<style>
	body {
		background: url("images/bg.png");
	}
	.textbox {
		padding: 8px;
	}
	::-webkit-input-placeholder {
		color: #83ae1e;
	}
	</style>
</head>

<body>
	<!-- content  -->
	<div id="content">
		<h1>Manage Account</h1>
	
		<form method="POST">
		<div class="row">
			<p>You may update whichever fields are necessary, then click Save.</p>
            <div class="col-sm-6">
                <p class="category">First Name<br/>
				<input type="text" name="fname" class="textbox" placeholder="first name" value="<?php if(isset($_SESSION['fname'])) { echo $_SESSION['fname']; } ?>"/></p>
		
				<p class="category">Last Name<br/>
				<input type="text" name="lname" class="textbox" placeholder="last name" value="<?php if(isset($_SESSION['lname'])) { echo $_SESSION['lname']; } ?>"/></p>
				
				<p class="category">E-mail<br/>
				<input type="text" name="email" class="textbox" placeholder="e-mail" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>"/></p>	
		
				<p class="category">Confirm E-mail<br/>
				<input type="text" name="emailconf" class="textbox" placeholder="e-mail" value="<?php if(isset($_SESSION['emailconf'])) { echo $_SESSION['emailconf']; } ?>"/></p>
            </div>
			<div class="col-sm-6">
				<p class="category">Username<br/>
				<input type="text" name="username" class="textbox" placeholder="username" value="<?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?>"/></p>	
			
				<p class="category">Password<br/>
				<input type="password" name="pword" class="textbox" placeholder="password" value="<?php if(isset($_SESSION['pword'])) { echo $_SESSION['pword']; } ?>"/></p>
				
				<p><br/><input type="submit" class="button" value="Save"/></p>
				<?php if (isset($errors['match'])){ echo $errors['match']; } ?>
				<?php if (isset($errors['success'])){ echo $errors['success']; } ?>
            </div>		
		</div>
		</form>
	</div>	
</body>

</html>