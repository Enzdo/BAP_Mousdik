<?php

if (isset($_POST)) {
    if(isset($_POST)["nom"] && isset($_POST)["mail"] && isset($_POST)["sujet"] && isset($_POST)["message"]){
        $message = "Ce mail vous à été envoyé via le formulaire de contacte du site Mousdik Piano
    Nom : " . $_POST["nom"] . "
    Email : " . $_POST["mail"] . "
    Message : " . $_POST["message"];

        mail("mail de réception", $_POST["sujet"], $message, "Reply-to: " . $_POST["mail"]);
    }else{
        echo "<p>Tout les champs doivent être remplis</p>";
    }

} else {
    echo"<p>Une erreur est survenue à l'envoie de l'email</p>";
}
