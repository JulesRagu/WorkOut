
<?php 
    session_start();
    if(!$_SESSION['estConnecte']|| !isset($_SESSION['estConnecte'])){
        echo $_SESSION['estConnecte'];
        //header("Location: connexion.php");
    }else{
        require "header.php";
        require "sqlconnect.php" ;

        $sql= $connection->prepare("SELECT * FROM employer WHERE id = :id ") ;

        $sql->bindParam(':id', $_SESSION["idUser"], PDO::PARAM_STR);
    
        $sql->execute();
        $ligne = $sql->fetch();
        
        ?>
<head>
    <title>Workout | Catégories</title>
</head>
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

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="behindCase"></div>
                <div class="col-10 case coin-arrondi inFrontOfCase">
                <?php
                    echo "<h3> Salut  ".$ligne['prenom']." !</h3>";
                ?>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        
        <br>
        <br>

        <div class="container">
            <div class="row">
            <?php
                include "sqlconnect.php";

                $sql= $connection->prepare("SELECT * FROM categorie") ; 
                $sql->execute();
                $ligne = $sql->fetchall();

                foreach($ligne as $categorie){
                    echo'
                        <div class="col-2"></div>
                        <div class="col-8 categorie coin-arrondi">
                            <a class="lien" href="echauffement.php?id='.$categorie['id'].'">
                                <img class=" bounce2" src="'.$categorie["categ_icons"].'" height="50px"/ width="50px">
                                <h3 class="nom_categ">'.$categorie['nom'].'</h3>
                            </a>
                        </div>  
                        <div class="col-2"></div>

                    ';  
                }
            ?>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="behindCase"></div>
                <div class="col-10 case coin-arrondi inFrontOfCase">
                    <p id="qEchauffement">On échauffe quoi aujourd'hui ?</p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

    </div>
    
</body>
</html>

<?php
    }
?>


