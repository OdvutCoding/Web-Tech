<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
    	header("location:Homepage.php");
    	exit();
    }

    if(isset($_GET['logout']))
    {
    	unset($_SESSION['user']);
    	header("loation:Homepage.php");
    	exit();
    }


?>
<?php include 'Header.php'?>
<?php include '../Controller/DataController.php'?>

<!DOCTYPE html>
<html>

<html lang="en">

<head>
	<style>
		header {float: center;}
		main {float: center;}
		div {font-family: lufga; color: blueviolet;}
		body{font-family: lufga;}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>

<body>

	<div class="content">
		<header>
		<h2> Welcome <?php echo $_SESSION['user']; ?> <h2> 
			<!-- User's name is stored in '$_SESSION' superglobal -->
		<a href ="?logout">Log out</a>	
		</header>

		<main>
			<h3> Your information </h3>
			<?php

			$_GET['username'] = $_SESSION['user'];
			$username = $_GET['username'];

			$userDetails = userdetail($username);
			echo "<label>Username: </label>";
			echo $userDetails['username'];
			echo "<br>";
			echo "<label>E-mail: </label>";
			echo $userDetails['email'];
			echo "<br>";
			echo "<label>Gender: </label>";
			echo $userDetails['gender'];
			echo "<br>";
			echo "<label>Date of Birth: </label>";
			echo $userDetails['dob'];
			echo "<br>";
			?>

		</main>

	</div>


</body>

</html>

<?php include 'Footer.php'?>