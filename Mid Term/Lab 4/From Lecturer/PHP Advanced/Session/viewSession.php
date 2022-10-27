<?php

session_start();

echo $_SESSION['name'];
echo $_SESSION['age'];


  ?>

  <a href="destroySession.php">Destroy</a>