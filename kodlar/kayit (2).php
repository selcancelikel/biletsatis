<?php

include "config.php";



$ekle= "insert into kullanici (ad,sifre) VALUES ('".$_POST["ad"]."','".$_POST["sifre"]."')";



$cevap = mysqli_query( $db,$ekle);


// $ad=".$_POST["ad"].";
$ad = $_POST["ad"];

$user=$_POST["ad"];




if(!$cevap){
echo '<br>Hata:' . mysqli_error($conn);
}
else
{


  usleep(2000000);
  header("Location: girisform.php");
    echo "KAYİT BASARİLİ!";
exit;

  //  header("Location: index.php");
  // exit; // Yönlendirme sonrasında kodun devam etmesini engellemek için exit kullanabilirsiniz.

}


?>