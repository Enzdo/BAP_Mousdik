<?php
session_start();

unset($_SESSION['isAdmin']);

?>
<main>


    <form method="post">
        <input type="password" id="" name="mdp" placeholder="mot de passe admin">
        <input type="submit" value="ENTRER ADMIN" id="security">
    </form>
    <?php

    if ($_POST){
        if ($_POST["mdp"] === "adminpiano"){
            $_SESSION["isAdmin"]=true;
            header('Location: admin.php');
        }else{
            echo "Une erreur est survenue !";
        }
    }else{
    }
    ?>
</main>
