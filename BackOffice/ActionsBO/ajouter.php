<?php




switch ($_REQUEST['table']) {
    case 0: //Entreprises
        
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO entreprise (nom,adresse) VALUES 
            (:nom, :adresse)") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':adresse',$_REQUEST["adresse"],PDO::PARAM_STR);         

            $sql->execute();
        
            echo "Entreprise ajoutée";
        
            header("location: ../BackOfficeChoose.php?table=0");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=0\">Retour à l'accueil</a>";
        }catch(Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=0\">Retour à l'accueil</a>";
        }

        break;
    case 1: //Employers
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO employer (nom,prenom,poste,mail,MDP, id_Entreprise) VALUES 
            (:nom, :prenom, :poste, :mail, :MDP, :id_Entreprise)") ;
        
            $psw = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':prenom',$_REQUEST["prenom"],PDO::PARAM_STR);
            $sql->bindParam(':poste', $_REQUEST["poste"], PDO::PARAM_STR);
            $sql->bindParam(':mail', $_REQUEST["mail"], PDO::PARAM_STR);
            $sql->bindParam(':MDP', $psw, PDO::PARAM_STR);
            $sql->bindParam(':id_Entreprise', $_REQUEST['entrepriseEmp'], PDO::PARAM_INT);
          
            $sql->execute();
        
            echo "Employer ajouté";
        
            header("location: ../BackOfficeChoose.php?table=1");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }catch (Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"accueil.php\">Retour à l'accueil</a>";
        }
        break;
    case 2: //Catégories
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO categorie (nom) VALUES 
            (:nom)") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);


            $sql->execute();
        
            echo "Catégorie ajoutée";
        
            header("location: ../BackOfficeChoose.php?table=2");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }catch(Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }

        break;
    case 3: //Echauffements
        try{
            require "../../sqlconnect.php";
            $sql= $connection->prepare("INSERT INTO echauffement (nom,video,id_Categorie) VALUES 
            (:nom,:video,:id_Categorie)") ;
        
            $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
            $sql->bindParam(':video',$_REQUEST["video"],PDO::PARAM_STR);
            $sql->bindParam(':id_Categorie',$_REQUEST["categorieEchauff"],PDO::PARAM_STR);


            $sql->execute();
        
            echo "Echauffement ajoutée";
        
            header("location: ../BackOfficeChoose.php?table=3");
        
        }catch (PDOException $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }catch(Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo"<a href =\"../BackOfficeChoose.php?table=2\">Retour à l'accueil</a>";
        }
        break;
}



?>