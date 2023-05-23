<?php

include "config.php";


$uname = $_POST["uname"];
$upass = $_POST["upass"];

$result = $db -> query("SELECT * FROM kullanici WHERE ad='$uname' AND sifre='$upass' LIMIT 1");


// $result = mysqli_query("...");
// mysqli_num_rows($result);

$satir_sayisi = $result->num_rows;

if($satir_sayisi == 0)
{
    die("Kullanici bulunamadi!");
}



// mysqli_fetch_assoc($result);

$satir = $result->fetch_assoc();



$_SESSION["id"] = $satir["id"];
$_SESSION["ad"] = $satir["ad"];

// setcookie("id", $satir["id"], time() + 10);
// setcookie("username", $satir["username"], time() + 10);

echo $satir["id"] . " numaralı kullanıcı için giriş yapıldı.";
echo "<br> <a href='index.php'>Anasayfa</a>";



// while($satir = $mysqli->fetch_assoc($result))
// {

// }

?>