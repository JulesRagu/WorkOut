<?php

try{
    require "sqlconnect.php";
    $sql= $connection->prepare("INSERT INTO employer (nom,prenom,poste,mail,MDP, id_Entreprise) VALUES 
    (:nom, :prenom, :poste, :mail, :MDP, :id_Entreprise)") ;

    $psw = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);

    $sql->bindParam(':nom',$_REQUEST["nom"],PDO::PARAM_STR);
    $sql->bindParam(':prenom',$_REQUEST["prenom"],PDO::PARAM_STR);
    $sql->bindParam(':poste', $_REQUEST["poste"], PDO::PARAM_STR);
    $sql->bindParam(':mail', $_REQUEST["mail"], PDO::PARAM_STR);
    $sql->bindParam(':MDP', $psw, PDO::PARAM_STR);
    $sql->bindParam(':id_Entreprise', $_REQUEST['entreprise'], PDO::PARAM_INT);
  
    $sql->execute();

    echo "Vos informations ont bien été ajoutées à notre base de données ! Vous êtes maintenant inscris !";
    session_start();
    
    $sql= $connection->prepare("SELECT * FROM employer WHERE mail = :mail LIMIT 1") ;
    $sql->bindParam(':mail', $_REQUEST["mail"], PDO::PARAM_STR);
    $sql->execute();
    $ligne = $sql->fetch();

    $_SESSION['idUser']=$ligne['id'];
    $_SESSION['estConnecte'] = true;

    header("location: trainning.php");

}catch (PDOException $e){
    echo "Erreur: ".$e->getMessage();
    echo"<a href =\"accueil.php\">Retour à l'accueil</a>";
}

?>