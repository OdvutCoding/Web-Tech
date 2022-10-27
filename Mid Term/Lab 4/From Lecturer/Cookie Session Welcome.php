<?php 

	if (!empty($_POST['remember'])) {
		setcookie("username", $_POST['uname'], time()+10);
		setcookie("password", $_POST['pass'], time()+10);
		echo "Cookie set successfully";
		if(setcookie( time()>0))
		{
		 session_start();

	    if (isset($_SESSION['uname'])) {
		echo "<h2>Welcome ". $_SESSION['uname']. "</h2>";
		echo "<a href='Cookie Session Logout.php'>Logout</a>";
	    }else{
		header("location:Cookie Session Login.php");
	    }
		}
		
	}else{
		setcookie("username", "");
		setcookie("password", "");
		echo "Cookie not set";

	}

 ?>
 <br>
 <a href="Cookie Session Login.php">Go back to login</a>