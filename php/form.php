<?php

    include "../config/connexion.php";
   
    if(isset($_POST["nom_prenom"])&& isset($_POST["email"]) && isset($_POST["fichier"])
    && isset($_POST["objet"])&& isset($_POST["message"]));
    {
        
        $nom_prenom= $_POST["nom_prenom"];
        $email= $_POST["email"];
        $objet= $_POST["objet"];
        $fichier= $_POST["fichier"];
        $message= $_POST["message"];

        $req = $db->prepare("insert into formulaire(nom_prenom,email,objet,fichier,message,date) 
                                                values('$nom_prenom','$email','$objet','$fichier','$message', current_timestamp() )");
        $req->execute();
        
        if($req)
        {
            echo "Message envoyer avec succès";
        }
        else
        {
            echo"erreur d'envoie";
        }
        
    }
?>