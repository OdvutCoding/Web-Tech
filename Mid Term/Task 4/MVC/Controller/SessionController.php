<?php
//This is currently faulty, if session exist, it should redirect to homepage instead of login.
//Session checking
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
        setcookie('password',"");
        echo 'Cookieless? <br>' ; 
    }
    echo "<a href='../View/Logout_Form.php'>Logout</a>";
}
else
{
    header('location:../View/Login_Form.php');
}

?>
<?php include 'Footer.php'?>