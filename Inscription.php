<?php require "header.php"?>
<head>
    <title>Workout | Inscription </title>
    <script src="script\Inscription.js"></script>
</head>

    <body>
        <div class="container">
            <form method="GET" action="inscriptionCompte.php" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-4"> </div>
                        <div class="col-4" style="text-align: center;">
                        <a href="accueil.php"><img src="assets\logo.png" height="80" width="80"></a> </br></br>
                        </div>
                    <div class="col-4"> </div>
                </div>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="nom">Nom :</label>
                        <br>
                        <input class="rounded-pill" type="text" name="nom" id="Nom" onfocusout="verifNom()"/>
                        <div id="erreurNom"></div>   
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="prenom">Prénom :</label>
                        <br>
                        <input class="rounded-pill" type="text" name="prenom" id="Prenom" onfocusout="verifPrenom()"/>
                        <div id="erreurPrenom"></div>  
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>
                
                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="Poste">Poste :</label>
                        <br>
                        <input class="rounded-pill" type="text" name="poste" id="poste"/> 
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>
                
                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="entreprise">Entreprise :</label>
                        <br>
                        <select name="entreprise" id="entreprise">
                            <option value="">--Choisir une entreprise--</option>
                            <?php 
                                require 'sqlconnect.php';

                                $sql = 'SELECT id, nom FROM entreprise' ;
                                $table = $connection->query($sql);
                                while ($ligne = $table->fetch()) {
                                    echo '<option value="'.$ligne["id"].'">'.$ligne["nom"].'</option>';
                                }    
                                $table->closeCursor();    
                            ?>
                        </select>
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="mail">Mail :</label>
                        <br>
                        <input class="rounded-pill" type="text" name="mail" id="Mail" onfocusout="verifMail()"/> 
                        <div id ="erreurMail"></div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="Cfmail">Confirmation mail :</label>
                        <br>
                        <input class="rounded-pill"  type="text" id="CfMail" onfocusout="verifCfMail()"/> 
                        <div id ="erreurCfMail"></div>
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="mdp">Mot de passe :</label>
                        <br>
                        <input class="rounded-pill"  type="password" name="password" id="mdp"/> 
                        <!--Rajouter div erreur et confirmation de mdp-->
                    </div>
                    <div class="col-2"></div>
                </div>

                <br>

                <div class="row" style="color: white;">
                    <div class="col-2"></div>
                    <div class="col-8" style="text-align: center;">
                        <label for="mdp_verif">Confirmation mot de passe :</label>
                        <br>
                        <input class="rounded-pill" type="password" id="mdp_verif" onfocusout="TestMdp_verif()"/> 
                        <div id="erreurMdp"></div>
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
                                <button type="submmit" style="color: white; text-align: center;" class="btn btn-dark rounded-pill btn-sm">S'inscrire</button>
                            </div>
                        </div> 
                    </div>
                    <div class="col-1"></div>
                </div>       
            </form>
        </div>
    </body>
</html> 