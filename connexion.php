<?php
require "header.php";
?>

<head>
    <title>Workout | Connexion </title>
    <script src="script\connexion.js"></script>
</head>
    <body>
        <div class="container">
            <form method="GET" action="connexionCompte.php" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-4"> </div>
                        <div class="col-4" style="text-align: center;">
                        <a href="accueil.php">
                            <img src="assets\logo.png" height="80" width="80">
                        </a></br></br>
                        </div>
                    <div class="col-4"> </div>
                </div>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                            <label for="mail">Adresse email : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                            <input class="rounded-pill" name="mail" type="text"  id="Mail" onfocusout="verifMail()"/>
                            <div id="erreurMail"></div>   
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="password">Mot de passe : </label><!--on créer un label donc un objet que lon peut reutiliser avec for il pointe sur l'id name   -->
                        <input class="rounded-pill" id="password" name="password" type="password"/><div id="erreurMail"></div>   
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>
                
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" style="text-align: center;">
                        <div class="row">
                            <div class="col-6" style="text-align: center;"> 
                                <button type="reset" style="color: white;" class="btn btn-dark rounded-pill btn-sm">Annuler</button>
                            </div>
                            <div class="col-6" style="text-align: center;"> 
                                <button type="submmit" style="color: white; text-align: center;" class="btn btn-dark rounded-pill btn-sm">Se connecter</button>
                            </div>
                        </div> 
                    </div>
                    <div class="col-1"></div>
                </div> 

            </form>
        </div>
        
    </body>
</html>
