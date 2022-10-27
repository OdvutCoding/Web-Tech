<?php include 'Header.php'?>

<?php require("../Model/LoginClass.php")?>

<?php
    if(isset($_POST['submit']))
    {
    	$user = new Login($_POST['username'], $_POST['password']);
    }

?>

<!DOCTYPE html>
<html>

<html lang="en">

<head>
	<style>
		body{font-family: lufga;}
		button{font-family: lufga; height: 30px;}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>

<body>

	<form method="post" enctype="multipart/form-data"> <!-- enctype for encrypting password, WE NEVER STORE PASSWORD IN RAW FORMAT -->

		<h2>Login Form</h2>

		<label>Username</label>
		<input type="text" name="username"><br>

		<label>Password</label>
		<input type="Password" name="password"><br>
		<br>

		<button type ="submit" name="submit">Log in</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
		
	</form>

</body>

</html>
<?php include 'Footer.php'?>