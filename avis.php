<?php

require 'header.php';
?>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<main>
    <div class="titre_actualite">
        <h5>Avis</h5>
    </div>
    <div class="stars">
        <i class="lar la-star" data-value="1"></i>
        <i class="lar la-star" data-value="2"></i>
        <i class="lar la-star" data-value="3"></i>
        <i class="lar la-star" data-value="4"></i>
        <i class="lar la-star" data-value="5"></i>
    </div>
    <input type="hidden" name="note" id="note" value="0"
    <form action="" method="POST">
        <input type="text" id="fname" name="firstname" placeholder="Votre nom">
        <input type="text" id="ftexte" name="firstname" placeholder="Faites part de votre expérience">
        <input type="submit" value="VALIDER" id="submit">
    </form>
</main>
<?php

require 'footer.php';
?>
