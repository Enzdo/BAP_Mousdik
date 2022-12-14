<?php

require 'header.php';
require 'class/connection.php';
require_once 'class/classAvis.php';

$connection = new Connection();
?>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<main>
    <div class="titre_actualite">
        <h5>Avis</h5>
    </div>
    <form action="" method="post">
        <div class="stars">
            <i class="lar la-star" data-value="1"></i>
            <i class="lar la-star" data-value="2"></i>
            <i class="lar la-star" data-value="3"></i>
            <i class="lar la-star" data-value="4"></i>
            <i class="lar la-star" data-value="5"></i>
        </div>
        <input type="hidden"  id="note" name="note" value="0">
        <input type="text" id="fname" name="name" placeholder="Votre nom">
        <textarea id="ftexte" name="message" placeholder="Faites part de votre expérience"></textarea>
        <input type="submit" value="VALIDER" id="submit">
    </form>
</main>
<?php
if($_POST){
    $avis = new avis(
        $_POST['name'],
        $_POST['message'],
        $_POST['note']
    );

    $result = $connection->insertAvis($avis);

    if ($result){
        echo 'Vous avez ajouté votre avis avec succés !';
    } else {
        echo 'L\'opération a échouée';
    }
}




require 'footer.php';
?>
