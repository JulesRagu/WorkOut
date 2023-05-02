<?php
require "header.php";
?>
<head>
    <title>Workout | Echauffement</title>

    <?php
    include "sqlconnect.php";

    $sql= $connection->prepare("SELECT * FROM echauffement WHERE id_Categorie= :idCateg") ;
    $sql->bindParam(":idCateg", $_REQUEST['id']);
    $sql->execute();
    $ligne = $sql->fetchall();

    foreach($ligne as $echauffement){
        $nom = $echauffement['nom'];
        $video = $echauffement['video'];
    }
    ?>

</head>

<body>

    <div class="container"> 

        <?php require "nav.php";?>

        <br>

        <div class="row">
            <div class="col-4"></div>
                <div class="col-4"  style="text-align: center;">
                    <img src="assets\logo.png" height="80" width="80">
                </div>
            <div class="col-4"></div>
        </div>

        <br>

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 categorie coin-arrondi">
                <?php echo"<h3>".$nom."</h3>"?>
            </div>
            <div class="col-4"></div>
        </div>

        <br>

        <div class="row">
            <div class="col-1"> </div>
                <div class="col-10">
                    <video class="coin-arrondi" controls width="320">
                        <source src="<?php echo $video?>" type="video/webm">
                    </video>
                </div>
            <div class="col-1"> </div>
        </div>
                
        <br>

        <div class="row">
            <div class="col-4"> </div>
                <div class="col-4" style="text-align: center;">
                    <form action="qr_code.php">
                        <button type="submit" style="color: white;" class="btn btn-dark rounded-pill">J'ai finis !</button>
                    </form>
                </div>
            <div class="col-4"> </div>
        </div>

    </div>
</body>
</html>

