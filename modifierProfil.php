<?php
    try{
        require "sqlconnect.php";
        $sql= $connection->prepare("UPDATE employer SET nom=:nom, prenom=:prenom, poste=:poste, mail=:mail WHERE id=:id") ;

        session_start();

        var_dump($_SESSION['idUser']);
        $sql->bindParam(':id',$_SESSION['idUser'],PDO::PARAM_STR);
        $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
        $sql->bindParam(':prenom',$_REQUEST["prenom"],PDO::PARAM_STR);
        $sql->bindParam(':poste',$_REQUEST["poste"],PDO::PARAM_STR);
        $sql->bindParam(':mail',$_REQUEST["mail"],PDO::PARAM_STR);
        
        $sql->execute();

        echo "Votre compte a été modifié";

        header("location: profil.php");

    }catch (PDOException $e){
        echo "Erreur: ".$e->getMessage();
        
    }catch(Exception $e){
        echo "Erreur: ".$e->getMessage();
        
}


?>
