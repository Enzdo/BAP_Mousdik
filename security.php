<?php
session_start();

unset($_SESSION['isAdmin']);
require 'header.php';
?>
<main>

    <div class="boxS">
    <form method="post" id="formS">
        <input type="password" id="" name="mdp" placeholder="mot de passe admin">
        <input type="submit" value="ENTRER ADMIN" id="security">
    </form>
    </div>
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
<?php

require 'footer.php';
?>