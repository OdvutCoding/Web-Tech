<?php include 'Header.php'?>

<?php require("../Model/RegistrationClass.php")?>

<?php

//$gender =""; //The error prompt most likely does not show up due to this staying in the input box

    if(isset($_POST['submit']) && !empty($_POST['gender']))
    	//Problem: with && !empty($_POST['gender']) inside above if statement, the error prompt never shows up. Without it, the prompt does.
        //&& !empty($_POST['gender'] <-- Undefined key error if we don't add it in if statement
    {
    		//$gender=$_POST['gender'];
    		$user = new Register($_POST['username'], $_POST['password'], $_POST['email'], $_POST['gender'], $_POST['dob']);
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
	<title>Registration Form </title>
</head>
<body>

	<form method="post" enctype="multipart/form-data"> <!-- enctype for encrypting password, WE NEVER STORE PASSWORD IN RAW FORMAT -->

		<h2>Registration Form</h2>

		<label>Username</label>
		<input type="text" name="username"><br>

		<label>Password</label>
		<input type="Password" name="password"><br>

		<label>E-mail</label>
		<input type="text" name="email"><br>

		<label>Gender</label>
		<input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>                     
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>

		<label>Date of Birth</label>
		<input type="date" name="dob"> <br>
		<br>

		<button type ="submit" name="submit">Register</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
		
	</form>

</body>
</html>
<?php include 'Footer.php'?>