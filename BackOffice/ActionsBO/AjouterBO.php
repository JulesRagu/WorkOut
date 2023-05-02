<?php

switch ($_REQUEST['table']) {
    case 0: //Entreprises

        ?>
        <form method="GET" action="ajouter.php">
            <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>
            <div>
                <label>nom</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label>adresse</label>
                <input type="text" name="adresse">
            </div>


            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </form>
        <a href="../BackOfficeChoose.php?table=0"><button>Retour</button></a>
        <?php
        break;
    case 1: //Employers
        ?>
        <form method="GET" action="ajouter.php">
            <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>

            <div>
                <label>Nom</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label>Prenom</label>
                <input type="text" name="prenom">
            </div>
            <div>
                <label>poste</label>
                <input type="text" name="poste">
            </div>
            <div>
                <label>Mail</label>
                <input type="text" name="mail">
            </div>
            <div>
                <label>Mot de passe</label>
                <input type="password" name="password">
            </div>
            <div>
                <label>Entreprise</label>
                <select name="entrepriseEmp">
                <?php    

                include "../../sqlconnect.php";
                $sql= $connection->prepare("SELECT * FROM entreprise") ; 
                $sql->execute();
                $ligne = $sql->fetchall();

                
                foreach($ligne as $entreprise){ 
                    echo "<option  value=".$entreprise['id'].">".$entreprise['nom']."</option>";
                }
                ?>
                </select>
            </div>

            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </form>
        <a href="../BackOfficeChoose.php?table=1"><button>Retour</button></a>
        <?php
        break;
    case 2: //Catégories
        ?>
        <form method="GET" action="ajouter.php">
            <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>
            <div>
                <label>Nom</label>
                <input type="text" name="nom">
            </div>


            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </form>
        <a href="../BackOfficeChoose.php?table=2"><button>Retour</button></a>
        <?php
        break;
    case 3: //Echauffements
        ?>
        <form method="GET" action="ajouter.php">
            <input type="text" name="table" value= "<?php echo$_REQUEST['table'];?>" hidden>
            <div>
                <label>Nom</label>
                <input type="text" name="nom">
            </div>
            <div>
                <label>Nom Vidéo</label>
                <input type="text" name="video">
            </div>
            <div>
                <label>Catégorie</label>
                <select name="categorieEchauff">
                <?php    

                include "../../sqlconnect.php";
                $sql= $connection->prepare("SELECT * FROM categorie") ; 
                $sql->execute();
                $ligne = $sql->fetchall();

                
                foreach($ligne as $categorie){ 
                    echo "<option value=".$categorie['id'].">".$categorie['nom']."</option>";
                }
                ?>
                </select>
            </div>
            
            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </form>
            <a href="../BackOfficeChoose.php?table=3"><button>Retour</button></a>
            <?php
        break;
    default:
        echo "erreur";
        break;
}



?>