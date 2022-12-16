<?php

require 'header.php';
?>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<main>
    <div class="BlockAvis">
        <div class="titre_avis">
            <h5>Avis</h5>
        </div>
        <div class="PAvis">
            <div>
                <input type="hidden" name="note" id="note" value="0"
                <form action="" method="POST">
                    <div class="formulaire">
                        <div class="okok">
                            <div class="stars">
                                <i class="lar la-star" data-value="1"></i>
                                <i class="lar la-star" data-value="2"></i>
                                <i class="lar la-star" data-value="3"></i>
                                <i class="lar la-star" data-value="4"></i>
                                <i class="lar la-star" data-value="5"></i>
                            </div>
                                <input type="text" id="fname2" name="nom" placeholder="Votre nom">
                        </div>
                        <textarea type="text" id="ftexte" name="mail" placeholder="Faites part de votre expérience"></textarea>
                            <input type="submit" value="ENVOYER" id="submit">
                    </div>
                </form>
            </div>
        </div>

</main>
<?php

require 'footer.php';
?>
