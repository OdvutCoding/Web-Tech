<!DOCTYPE html>
<html>

    <style>
        .header img{float: left; width: 112px; height: 112px;}
        .header h1{position: relative; top: 18px; left:200px; float: center; font-family: Droidiga;}
        fieldset {font-family: Lufga;}
        .hnavmenu {float: right;}
    </style>

<body>
    <fieldset>

    <div class="header">
    <img src="duckwalk.gif"> <!-- Logo of the site --> 
    <h1>the quackwalk</h1>
    </div>
        
<div class="hnavmenu">
        <?php
        //Session validation - Faulty - redirecting to Login page instead of homepage
        $homepage;
        if(isset($_SESSION['username'])) //if session exists, isset checking $_SESSION superglobal
        {
            $homepage='../Controller/SessionController.php';
        }
        else
        {
            $homepage='homepage.php'; //Old line: $homepage='Login_Form.php';

        }
       //Navigation
        echo str_repeat('&nbsp;',50);
        echo "<a href = $homepage >Home</a>";
        echo str_repeat('&nbsp;',2);
        echo "<a href = 'Login_Form.php'>Sign in</a>";
        echo str_repeat('&nbsp;',2);
        echo "<a href = 'Registration_Form.php'>Register</a>";
        ?>
</div>

    </fieldset>
</body>
</html>