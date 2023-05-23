
<?php
 include "config.php";
?>




<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="j.js"></script>

</head>

<body>

    
    <nav class="navbar navbar-inverse yeni">
        <div class="container-fluid">
            <!-- <div class="navbar-header">
                <a class="navbar-brand" href=".">fUN</a>
            </div> -->
            <ul class="nav navbar-nav">
                <li class="active"><a href=".">Home</a></li>
                <li><a href="kullanicisozlesmesi.html">Kullanici sözlesmesi</a></li>
                <li><a href=".">Page 2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
           
                <li><a href="form.php"><span class="glyphicon glyphicon-user"><?php
                
                if ($theuser)
    {
    ?>
        <a href="profil.php">Profil</a>
        
    <?php
    }
    else
    {
    ?>
        <a href="girisform.php">Giris Yap</a>
    <?php
    };   ?></span></a></li>

                <li><a href="."><span class="glyphicon glyphicon-log-in"><?php

if ($theuser)
    {
    ?>
        
        <a href="cikis.php">cikis Yap</a>
    <?php
    }
    else
    {
    ?>
        <a href="formm.php">Kayit Ol</a>
        
    <?php
    }
    ?></span></a></li>
            </ul>
        </div>
    </nav>
    <br>

    <br>







<?php
                
                if ($theuser)
    {
    ?>
       <h2><?php echo "HOSGELDİN: " . $theuser["ad"]; ?></h2>
        
    <?php
    }
    else
    {
    ?>
        
    <?php
    }?>















    <h2 style="text-align: center;">How it works?</h2>
    <p>we will show you step by step the best films & movies starting now.</p>


    <div class="c">
        <i class="material-icons">cloud</i>
        <span>register1</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium atque vitae asperiores odit, accusantium
            quod!</p>
    </div>

    <div class="c">
        <i class="material-icons">cloud</i>
        <span>register2</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium atque vitae asperiores odit, accusantium
            quod!</p>
    </div>

    <div class="c">
        <i class="material-icons">cloud</i>
        <span>register3</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium atque vitae asperiores odit, accusantium
            quod!</p>
    </div>

    <br>
    <br>
    <br>
    <br>
    <table class="cleaerfix"
        style="border: solid 0px; margin-left: 70px; margin-right: 70px; background-color: #EAF4F7">
        <tr>
            <td>
                <img src="foto2.jpg" alt="resim" style="height: 400px; margin-left: 0;">
            </td>

            <td style="margin-top: 5px;">
                <h2>YAKLAŞAN ETKİNLİKLER</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore nemo quisquam odit. Est velit,
                    labore soluta
                    reiciendis quaerat corrupti voluptatibus, qui, provident ipsum sequi inventore laboriosam
                    corporis molestiae
                    id cupiditate!</p>
                <br>

                <a href="satinal.php">Satin al</a>


                <button type="button" class="btn btn-info" onclick="ses()" id="yasliamca1">DİNLE</button>

                <audio id="yasliamca2" src="Yildizlara-Bak.mp3" controls></audio>

            </td>
        </tr>

    </table>
    <br>
    <hr>
    <br>
    <h2>Lorem ipsum dolor sit amet.</h2>
    <br>
    <br>

    <div class="m" style="vertical-align: bottom;">
        <br>
        <br>
        <br>

        <h3>Premium</h3>
        <lu>
            <li> $9.99/month</li>
            <li> HD available</li>
            <li>Unlimited Movies and TV shows</li>
            <li> Watch on your phone & tablet</li>
            <li> Download and watch offline</li>
            <li>Screens you can watch</li>
            <li> First Month Free</li>
            <li> Choose Plan</li>

        </lu>
        <br>
        <br>

        <button type="button" class="btn btn-light">wiew</button>
    </div>

    <!-- <audio src="Yildizlara-Bak.mp3" controls>
        Tarayıcınız ses etiketini desteklemiyor.
      </audio> -->

    <div class="m" style="position: relative; bottom: 30px; background-color: rgb(45, 101, 164, .7);">

        <h3>Gold</h3>
        <lu>
            <li> $9.99/month</li>
            <li> HD available</li>
            <li>Unlimited Movies and TV shows</li>
            <li> Watch on your phone & tablet</li>
            <li> Download and watch offline</li>
            <li>Screens you can watch</li>
            <li> First Month Free</li>
            <li> Choose Plan</li>
        </lu>
        <br>
        <br>

        <!-- <a href="." style="padding: 7px;">Wiew</a> -->
        <button type="button" class="btn btn-light">wiew</button>

    </div>
    <div class="m">

        <h3>Basic</h3>
        <lu>
            <li> $9.99/month</li>
            <li> HD available</li>
            <li>Unlimited Movies and TV shows</li>
            <li> Watch on your phone & tablet</li>
            <li> Download and watch offline</li>
            <li>Screens you can watch</li>
            <li> First Month Free</li>
            <li> Choose Plan</li>
        </lu>
        <br>
        <br>
        <!-- <a href="." style="padding: 7px;">Wiew</a> -->
        <button type="button" class="btn btn-light" onclick="info()">wiew</button>

    </div>

    <br>
    <br>

    <hr>
    <section>
        <span class="fa-stack fa-lg">
            <i class="fa fa-circle-thin fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x"></i>
        </span>
        Bizi takip etmeyi unutmayın<br>

        <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
        <br>
        <i class="fa fa-refresh fa-spin"></i>

        <br>
        <br>


        <button type="button">CONTACT SALES.</button>
        <button type="button" style="background-color: whitesmoke; color: rgba(55, 55, 167);">START NOW.</button>
        <br>
        <br>
    </section>
    <h2 style="color: #ced2e5;">Uygulamamızdan daha çok yararlanmak için uygulamamızı indirin.</H2>

    <button type="button">Windows için</button>
    <button type="button">Tarayıcıdan devam et</button>

</body>

<style>
    .giris {

        border: solid 2px;
        border-radius: 5px;
        margin: 5px;
        padding: 9px;
        text-decoration: none;
        background-color: rgba(4, 4, 159, 0.707);
        transition-duration: .7s
    }

    section {
        display: block;
        background-color: rgb(25, 60, 136, .8);


    }

    button {

        padding: 10px;
        color: aliceblue;
        background-color: rgb(4, 4, 76);
        border-radius: 5px;

    }

    .m {
        width: 300px;
        height: 370px;
        background-color: #EAF4F7;
        margin-right: 10px;

    }

    .c {
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 50px;


    }

    a:hover {

        color: rgb(252, 248, 248);
        background-color: rgb(226, 206, 244);
        border: 2px solid;
        border-radius: 10px;
        border-color: rgb(2, 2, 59);
    }

    a:active {

        color: rgb(252, 248, 248);
        background-color: rgb(183, 183, 239);
        border: 2px solid;
        border-radius: 10px;
        border-color: rgb(2, 2, 59);

    }

    s {
        background-color: #ced2e5;

    }

    .r {

        width: 40%;
        text-align: center;
        margin-left: 0;




    }

    div {

        width: 25%;
        display: inline-block;
        box-shadow: 5px 15px 15px #4E4C4E;
        transition-duration: .5s
    }

    div:hover {

        /* color: rgb(2, 2, 59); */
        opacity: .7;


    }

    #bas {
        margin-top: 0;
        height: 80px;
        background-image: url('https://blog.biletino.com/file/2022/03/Konser-nedir-biletino-11245.jpg');
        width: 100%;

    }

    body {
        margin: 0;
        text-align: center;
        background-color: rgb(213, 229, 244, .2);


    }

    /* div span {

        font-size: larger;
        display: block;
        font-family: Arial, Helvetica, sans-serif;
        color: #7e7f84;

    } */

    .fa-stack fa-lg {

        font-size: larger;
        display: block;
        font-family: Arial, Helvetica, sans-serif;
        color: #7e7f84;


    }





    a {

        border: solid 2px;
        border-radius: 5px;
        margin: 5px;
        padding: 15px;
        text-decoration: none;
        background-color: rgb(226, 164, 48);
        transition-duration: .7s
    }

    tr {
        display: inline-block;

    }

    div p {
        width: 70%;
        margin: auto;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    audio {
        display: none;

    }

    .navbar nav {
        color: initial;
        display: initial;


        border: initial;

        margin: initial;
        padding: initial;
        text-decoration: initial;
        background-color: initial;
        transition-duration: initial;
        width: initial;
        height:
    }

    

    .navbar li {
        color: initial;
        display: initial;


        border: initial;

        margin: initial;
        padding: initial;
        text-decoration: initial;
        background-color: initial;
        transition-duration: initial;
        width: initial;
        height: initial;
    }

    .navbar a {
        color: initial;
        display: initial;


        border: initial;

        margin: initial;
        padding: initial;
        text-decoration: initial;
        background-color: initial;
        transition-duration: initial;
        width: initial;
        height: initial;

    }

    .navbar div {
        color: initial;
        display: initial;


        border: initial;

        margin: initial;
        padding: initial;
        text-decoration: initial;
        background-color: initial;
        transition-duration: initial;
        width: initial;
        height: initial;
    }

    .navbar span {
        color: initial;
        display: initial;


        border: initial;

        margin: initial;
        padding: initial;
        text-decoration: initial;
        background-color: initial;
        transition-duration: initial;
        width: initial;
        height: initial;

    }

    .navbar ul {
        color: initial;
        display: initial;


        border: initial;

        margin: initial;
        padding: initial;
        text-decoration: initial;
        background-color: initial;
        transition-duration: initial;
        width: initial;
        height: initial;
    }
</style>

</html>