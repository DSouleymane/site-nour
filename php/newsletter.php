<?php

    include "../config/connexion.php";
    
    if(isset($_POST["nom_prenom"])&& isset($_POST["email"]));
    {
        
        $nom_prenom= $_POST["nom_prenom"];
        $email= $_POST["email"];

        $req = $db->prepare("insert into form(nom_prenom,email,date) 
                                                values('$nom_prenom','$email', current_timestamp() )");
        $req->execute();
        
        if($req)
        {
            echo "Vous vous êtes abonné avec succès";
            header('location:index.php');
            die();
         }
        }
        else
        {
            echo"erreur d'envoie";
        }
        
    }
?>