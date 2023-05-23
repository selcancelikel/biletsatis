
<?php

include "config.php";

$sql = "SELECT name, konser, adet FROM bilet";
$result = $db->query($sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>KULLANİCİ BİLGİLERİ</h1>

<p><?php echo "merhaba"; ?></p>

<p>USERNAME: <?php echo $theuser["ad"]; ?></p>

<br>

<br>

<h2>ALINAN BILET BILGILERI</h2>
<?php 



if ($result->num_rows > 0) {

    // her bir satırı döker

    while($row = $result->fetch_assoc()) {

    echo "alan kisi: " . $row["name"]. " <br> Konser: " . $row["konser"]. "<br> bilet adedi " . $row["adet"];
echo "<br>";
echo "<br>";


    }

} else {

    echo "0 results";

}








 ?>

<a href="index.php">Anasayfa</a>

    
</body>
</html>