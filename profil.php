<?php
require "header.php";

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
        

        $nom = $ligne["nom"];
        $prenom = $ligne["prenom"];
        $poste = $ligne["poste"];
        $mail = $ligne["mail"];
        $mdp = $ligne["MDP"];

?>
<head>
    <title>Workout | Profil</title>
</head>


<body>
    <div class="container profil"> 

        <?php require "nav.php";?>

        <br>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4" style="text-align: center;">
                        <a href="trainning.php"><img src="assets\logo.png" height="80" width="80"></a> </br></br>
                    </div>
                    <div class="col-4"> </div>
                </div>
                <form method="GET" action="modifierProfil.php">

                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8" style="text-align: center;">
                                <label for="nom">Nom : </label>
                                <input class="rounded-pill" name="nom" type="text" value=" <?php echo $ligne['nom'] ?>" id="nom"/>
                                <div id="erreurMail"></div>   
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8" style="text-align: center;">
                            <label for="prenom">Prénom : </label>
                            <input class="rounded-pill" name="prenom" type="text" value=" <?php echo $ligne['prenom'] ?>" id="prenom"/>
                            <div id="erreurMail"></div>   
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8" style="text-align: center;">
                            <label for="mail">Email : </label>
                            <input class="rounded-pill" name="mail" type="text" value=" <?php echo $ligne['mail'] ?>" id="mail"/>
                            <div id="erreurMail"></div>   
                        </div>
                        <div class="col-2"></div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8" style="text-align: center;">
                            <label for="poste">Poste : </label>
                            <input class="rounded-pill" name="poste" type="text" value=" <?php echo $ligne['poste'] ?>" id="poste"/>
                            <div id="erreurMail"></div>   
                        </div>
                        <div class="col-2"></div>
                    </div>



                    <!-- <div class="row">
                        <div class="col-4">Mot de passe :</div>
                        <div class="col-4">
                            <?php //echo $MDP ?>
                        </div>
                        <div class="col-4"></div>
                    </div> -->
                    </div>
                <div class="col-1"></div>

                <br>

                <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10" style="text-align: center;">
                            <div class="row">
                                <div class="col-6" style="text-align: center;"> 
                                    <button style="color: white;" class="btn btn-dark rounded-pill btn-sm">Retour</button>
                                </div>
                                <div class="col-6" style="text-align: center;"> 
                                    <button type="submit" style="color: white; text-align: center;" class="btn btn-dark rounded-pill btn-sm">Enregistrer</button>
                                </div>
                            </div> 
                        </div>
                        <div class="col-1"></div>
                    </div>

                </form>
           
        </div>

        




    </div>
</body>
</html>

<?php } ?>