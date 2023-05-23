<?php

include "config.php";

// error_reporting(E_ALL);
// echo " ";

session_unset();
session_destroy();
session_start();
session_regenerate_id(true);


// $_SESSION["id"] = false;

// setcookie("id",0,time()-10);
// setcookie("username",0,time()-10);

?>

cikis yaptiniz!
<br>

<a href='index.php'>Anasayfa</a>

