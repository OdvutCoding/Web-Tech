<!DOCTYPE html>
<html>

    <style>
        .footer img{float: left; width: 112px; height: 112px;}
        fieldset {font-family: Lufga;}
        .fnavmenu {text-align: center;}
    </style>

<body>
    <fieldset>
        
<div class="fnavmenu">
    <?php
    //Usertype check
    global $userflag;

        if($userflag==1)
        {
            $usertype = 'Registered User';
        }
        else
        {
            $usertype = 'Guest';
        }

       //Navigation
        echo str_repeat('&nbsp;',20);
        echo 'Hello '.$usertype;
        echo str_repeat('&nbsp;',75);
        echo "<a href = Contact.php >Contact</a>";
        echo str_repeat('&nbsp;',2);
        echo "<a href = 'About.php'>About us</a>";
        echo str_repeat('&nbsp;',2);
        echo 'Copyright';
        echo str_repeat('&nbsp;',1);
        echo date("d-m-Y");
        ?>
</div>

    </fieldset>
</body>
</html>