<?php
require "header.php";
include "sqlconnect.php";
$sql= $connection->query("SELECT CURRENT_USER;") ;
$sql->execute();
$ligne = $sql->fetchall();

$user = $ligne[0][0];

preg_match('/(.*)@/', $user, $output_array);
?>
<html>

    <body>
        <div class="container">

            <?php require "nav.php";?>

            <br>

            <div class="row">
                <div class="col-4"></div>
                    <div class="col-4" style="text-align: center;">
                        <a href="accueil.php"><img src="assets\logo.png" height="80" width="80"></a> </br></br>
                    </div>
                <div class="col-4"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6" style="text-align: center;">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=
                    <?php
                        echo $output_array[1]."/".time();
                    ?>">
                </div>
                <div class="col-3"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-4"> </div>
                    <div class="col-4" style="text-align: center;">
                        <form action="trainning.php">
                            <button type="submit" style="color: white;" class="btn btn-dark rounded-pill">Merci !</button>
                        </form>
                    </div>
                <div class="col-4"> </div>
            </div>


        </div>



        
    </body>
</html>
