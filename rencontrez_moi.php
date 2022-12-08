<?php

require 'header.php';
?>
<main>
    <div class="profil">
        <div class="photo_profil">
            <img src="img/photo_mousdik.png" alt="">
        </div>
        <div class="profil_mousdik">
            <div class="nom_reseau">
                <h2>MOUSDIK Prénom</h2>
                <div class="reseau">
                    <img src="img/reseaux/twitter.png" alt="">
                    <img src="img/reseaux/linkdlin.png" alt="">
                    <img src="img/reseaux/google.png" alt="">
                </div>
            </div>
            <p>Formé à l’institut technologique européen des métiers de la musique au Mans, en 1987, j’ai commencé à exercer dans un atelier de restauration de pianos, et me suis mis à mon compte en 1996. Je travaille pour diverses écoles de Musique, professeurs de piano, musiciens professionnels, associations ainsi que des particuliers.</p>
        </div>
    </div>
    <div class="contact">
                    <div class="formulaire">
                        <h3>Contactez moi !</h3>
                        <p>N'hésitez pas à m'envoyer un message pour plus d'information !</p>
                        <form action="">
                            <div class="info_user">
                                <input type="text" id="fname" name="firstname" placeholder="Votre nom">
                                <input type="text" id="femail" name="firstname" placeholder="Votreemail@gmail.com">
                            </div>
                            <input type="text" id="ftexte" name="firstname" placeholder="Écrire un message ici">
                            <input type="submit" value="VALIDER" id="submit">
                        </form>
                    </div>
                    <div class="info_contact">
                        <div class="information">
                            <h6>Téléphone</h6>
                            <h3>+33 01 36 30 90 69</h3>
                        </div>
                        <div class="information">
                            <h6>Email</h6>
                            <h3>Mousdikpianos@gmail.com</h3>
                        </div>
                    </div>
        </div>
</main>
<?php

require 'footer.php';
?>