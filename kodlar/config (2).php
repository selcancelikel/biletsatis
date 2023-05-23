<?php
session_start();

$db_host = "sql204.epizy.com"; 
$db_user = "epiz_34256382";
$db_pass = "9833YGl12AdmHE";
$db_name = "epiz_34256382_web";


$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno())
{
    echo "Bağlanti kurulamadi!";
    exit();
}

$theuser = false;

if (isset($_SESSION["id"]) && $_SESSION["id"] > 0)
{
    $getuserquery = $db -> query("SELECT * FROM kullanici WHERE id=".$_SESSION["id"]);
    $theuser = $getuserquery -> fetch_assoc();
}


?>
