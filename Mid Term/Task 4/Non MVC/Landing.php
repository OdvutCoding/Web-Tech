<?php include 'Header.php'?>
<?php
//Sess
if (isset($_SESSION['username']))
{
    echo '<h2>Hello '.$_SESSION['username'].'</h2>';

    //Cookie creation
    if(!empty($_SESSION['remember']))
    {
        setcookie('username', $_SESSION['username'], time()+10);
        setcookie('password', $_SESSION['pass'],time()+10);
        echo 'Cookie created successfully' ;   
    }
    else
    {
        setcookie('username',"");
        setcookie('username',"");
        echo 'Cookieless? <br>' ; 
    }
    echo "<a href='Logout.php'>Logout</a>";
}
else
{
    header('location:Login.php');
}

?>
<?php include 'Footer.php'?>