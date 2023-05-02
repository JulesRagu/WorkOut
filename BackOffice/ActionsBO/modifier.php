<?php




switch ($_REQUEST['table']) {
    case 0: //Entreprises
        
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("UPDATE entreprise SET nom=:nom, adresse=:adresse WHERE id=:id") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':adresse',$_REQUEST["adresse"],PDO::PARAM_STR);         

            $sql->execute();
        
            echo "Entreprise ajoutée";
        
            header("location: ../BackOfficeChoose.php?table=0");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=0.php\">Retour à l'accueil</a>";
        }catch(Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=0\">Retour à l'accueil</a>";
        }

        break;
    case 1: //Employers
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("UPDATE employer SET nom=:nom, prenom=:prenom, poste=:poste, id_Entreprise=:idEntreprise WHERE id=:id") ;
        
            $sql->bindParam(':id',$_REQUEST["id"],PDO::PARAM_STR);
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':prenom',$_REQUEST["prenom"],PDO::PARAM_STR);
            $sql->bindParam(':poste',$_REQUEST["poste"],PDO::PARAM_STR);
            $sql->bindParam(':idEntreprise',$_REQUEST["entrepriseEmp"],PDO::PARAM_STR);
            
            $sql->execute();
        
            echo "Employer modifié";
        
            header("location: ../BackOfficeChoose.php?table=1");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=1.php\">Retour à l'accueil</a>";
        }catch(Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=1\">Retour à l'accueil</a>";
        }
        break;
    case 2: //Catégories
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("UPDATE categorie SET nom=:nom WHERE id=:id") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':id',$_REQUEST["id"],PDO::PARAM_STR);         

            $sql->execute();
        
            echo "Catégorie modifiée";
        
            header("location: ../BackOfficeChoose.php?table=2");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2.php\">Retour à l'accueil</a>";
        }catch(Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }
        break;
    case 3: //Echauffements
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("UPDATE echauffement SET nom=:nom, video=:video, id_Categorie=:idCateg WHERE id=:id") ;


            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':id',$_REQUEST["id"],PDO::PARAM_STR);
            $sql->bindParam(':video',$_REQUEST["video"],PDO::PARAM_STR);
            $sql->bindParam(':idCateg',$_REQUEST["categorieEchauff"],PDO::PARAM_STR);      

            $sql->execute();
        
            echo "Echauffement modifiée";
        
            header("location: ../BackOfficeChoose.php?table=3");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2.php\">Retour à l'accueil</a>";
        }catch (Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2.php\">Retour à l'accueil</a>";
        }
        break;
}



?>