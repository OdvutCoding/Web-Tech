<!DOCTYPE html>
<?php
if(isset($username) && isset($pass))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];
}
//Pattern= /^[a-zA-Z0-9_]+([-.][a-zA-Z0-9_]+)*$/
$patternus = "/^[a-zA-Z0-9_]+([-.][a-zA-Z0-9_]+)*$/";
$patternps = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$%*#?&]{8,}$/";
//Minimum eight characters, at least one letter, one number and one special character
$error = '';  
$message='';
if(isset($_POST['submit']))
{
    if(preg_match($patternus, $_POST['username']))
    {
        if(strlen($_POST['username'])>2)
        {
            if(preg_match($patternps, $_POST['pass']))
            {
               if($_POST['username'] == "admin")
               {
                  if($_POST['pass']== "@dmin2222")
                   {
                    $error ="";
                    $message = "Welcome";
                   }
                  else
                   {
                    $error ="Error! Invalid Password";
                    $message = "";
                   }
                }
            }
            $error ="Error! Invalid Password Pattern";
            $message = "";
        }
        else
        {
            $error ="Error! Minimum length of username is incorrect";
            $message = "";
        }
    }
    else
    {
        $error ="Error! Username pattern invalid";
        $message = "";
    }
}
//     if($_POST['username'] == "admin")
//     {
//         if($_POST['pass']== "admin")
//         {
//             $error ="";
//             $message = "Welcome";
//         }
//         else
//         {
//             $error ="Error! Invalid Password";
//             $message = "";
//         }
//     }
//     else
//     {
//         $error ="Error! Invalid Username";
//         $message = "";
//     }

// }
?>
<html>
<head>
<style>
    .error {color: orange;}
    body {background-color:#F0F8FF;}
    div {height: 100%; width: 25%; font-family:Poppins;}
</style>
</head>
<body>

<div>

<form action="" method="POST">
Username:
<input type="text" id="username" name="username" placeholder="Enter Username"/><br>
Password:
<input type="text" id="pass" name="pass" placeholder="Enter Password" />
<p><?php echo $message ?><?php echo $error ?></p>
<input type="submit" name="submit" value="Log in">

</div>

</body>
</html>