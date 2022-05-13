<?php

    include "../config/connexion.php";
   
    if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["telephone"])
    && isset($_POST["objet"])&& isset($_POST["message"]));
    {
        
        $nom= $_POST["nom"];
        $mail= $_POST["mail"];

        $req = $db->prepare("insert into formulaire(nom,email,date) 
                                                values('$nom','$mail', current_timestamp() )");
        $req->execute();
        
        if($req)
        {
            echo "insertion reussie";
            echo ' <a href="../../liste.php">Voir Formulaire</a>';
        }
        else
        {
            echo"erreur d'insertion";
        }
        
    }
?>