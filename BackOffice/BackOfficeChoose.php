<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackOffice</title>
</head>
<body>
<?php

switch ($_REQUEST['table']) {
    case 0: //Entreprises
        include "../sqlconnect.php";

        $sql= $connection->prepare("SELECT * FROM entreprise") ; 
        $sql->execute();
        $ligne = $sql->fetchall();
        echo"<h3>Entreprise</h3>";
        foreach($ligne as $entreprise){
            echo "<div>".$entreprise['nom']." <a href=\"ActionsBO/ModifierBO.php?table=0&id=".$entreprise['id']."\"><button>Modifier</button></a><a href=\"ActionsBO/supprimer.php?id=".$entreprise['id']."&table=0\"><button>Supprimer</button></a></div>";
        }
        ?>
        <a href="ActionsBO/AjouterBO.php?table=0"><button>Ajouter</button></a>
        <?php
        break;
    case 1: //Employers
        include "../sqlconnect.php";

        $sql= $connection->prepare("SELECT employer.mail, employer.id, entreprise.nom AS entrepriseEmploy FROM employer INNER JOIN entreprise ON employer.id_Entreprise = entreprise.id ORDER BY employer.id_Entreprise") ;
        $sql->execute();
        $ligne = $sql->fetchall();
        echo"<h3>Employers</h3>";
        foreach($ligne as $employer){
            echo "<div>".$employer['mail']." - ".$employer['entrepriseEmploy']. " <a href=\"ActionsBO/ModifierBO.php?table=1&id=".$employer['id']."\"><button>Modifier</button></a><a href=\"ActionsBO/supprimer.php?id=".$employer['id']."&table=1\"><button>Supprimer</button></a></div>";
        }
        ?>
        <a href="ActionsBO/AjouterBO.php?table=1"><button>Ajouter</button></a>
        <?php
        break;
    case 2: //Catégories
        include "../sqlconnect.php";

        $sql= $connection->prepare("SELECT * FROM categorie") ; 
        $sql->execute();
        $ligne = $sql->fetchall();
        echo"<h3>Catégories</h3>";
        foreach($ligne as $categorie){
            echo "<div>".$categorie['nom']." <a href=\"ActionsBO/ModifierBO.php?table=2&id=".$categorie['id']."\"><button>Modifier</button></a><a href=\"ActionsBO/supprimer.php?id=".$categorie['id']."&table=2\"><button>Supprimer</button></a></div>";
        }
        ?>
        <a href="ActionsBO/AjouterBO.php?table=2"><button>Ajouter</button></a>
        <?php
        break;
    case 3: //Echauffements
        include "../sqlconnect.php";

        $sql= $connection->prepare("SELECT echauffement.id, echauffement.nom, categorie.nom AS nomCateg FROM echauffement INNER JOIN categorie ON echauffement.id_Categorie = categorie.id ORDER BY echauffement.id_Categorie") ; 
        $sql->execute();
        $ligne = $sql->fetchall();
        echo"<h3>Echauffements</h3>";
        foreach($ligne as $echauffement){
            echo "<div>".$echauffement['nom']." - ".$echauffement['nomCateg']." <a href=\"ActionsBO/ModifierBO.php?table=3&id=".$echauffement['id']."\"><button>Modifier</button></a><a href=\"ActionsBO/supprimer.php?id=".$echauffement['id']."&table=3\"><button>Supprimer</button></a></div>";
        }
        ?>
        <a href="ActionsBO/AjouterBO.php?table=3"><button>Ajouter</button></a>
        <?php
        break;
    default:
        echo "erreur";
        break;
}

?>
<div><a href="BackOffice.php"><button>Retour</button></a></div>
</body>
</html>