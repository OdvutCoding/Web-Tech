<?php session_start(); ?>

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
        //Session validation
        $homepage;
        if(isset($_SESSION['username'])) //if session exists, isset checking $_SESSION superglobal
        {
            $homepage='Landing.php';
        }
        else
        {
            $homepage='Login.php';
        }
       //Navigation
        echo str_repeat('&nbsp;',50);
        echo "<a href = $homepage >Home</a>";
        echo str_repeat('&nbsp;',2);
        echo "<a href = 'Login.php'>Sign in</a>";
        echo str_repeat('&nbsp;',2);
        echo "<a href = 'Registration.php'>Register</a>";
        ?>
</div>

    </fieldset>
</body>
</html>