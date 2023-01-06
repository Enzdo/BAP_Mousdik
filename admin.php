<?php

require 'header.php';
require 'class/connection.php';
require_once 'class/classPiano.php';

$connection = new Connection();
session_start();

if (empty($_SESSION)){
    header('Location: security.php');
}
?>
<main>
    <form action="./security.php" method="post">
        <button name="disconnect" type="submit">Déconnexion</button>
    </form>
<div class="pianoAdmin2">
    <h5>Admin</h5>
    <form class="ajoutPiano" method="POST">
        <input type="text" id="Pname" name="name" placeholder="Nom du piano">
        <input type="file" id="Pimage" name="image" placeholder="Image du piano">
        <input type="text" id="Pmarque" name="brand" placeholder="Marque du piano">
        <input type="text" id="Pprix" name="price" placeholder="Prix du piano">
        <input type="submit" value="VALIDER" id="submit">
    </form>
</div>
    <?php
    if($_POST){
        $piano = new piano(
            $_POST['name'],
            $_POST['brand'],
            $_POST['price'],
            $_POST['image']
    );

        $result = $connection->insertPiano($piano);

        if ($result){
            echo 'Vous avez ajouté votre piano avec succés !';
        } else {
            echo 'L\'opération a échouée';
        }
    }
    ?>

    <h5>Vos Pianos</h5>

    <div class="tousLesPiano">
        <?php
        $myPianos = $connection->getAllPiano();

        foreach ($myPianos as $value){

            echo'<ul>';
            ?>
            <li>
                <?php
                echo "<div class='blockPiano'><div class='nomPiano'>".$value['name']. "</div><div class='brandPiano'>" .$value['brand']."</div><div class='pricePiano'>".$value['price'].'€'."</div><div class='datePiano'>".$value['date']."</div>";
                echo '<div class="suprimePiano"><a href="deletePiano.php?id='. $value['id'].'">supprimer ce piano</a></div></div>';
                ?>
            </li> <?php

            echo'</ul>';
        }

        ?>
    </div>

    <h5>Vos Avis</h5>
    <div class="tousLesAvis">
        <?php
        $myAvis = $connection->getAllAvis();

        foreach ($myAvis as $value){

            echo'<ul>';
            ?>
            <li>
                <?php
                echo "<div class='blockAvis'><div class='nomAvis'>".$value['name']."</div><div class='messageAvis'>".$value['message']."</div><div class='scoreAvis'>".$value['score']."sur5 </div><div class='dateAvis'>".$value['date']."</div>";
                echo '<div class="suprimePiano"><a href="deleteAvis.php?id='. $value['id'].'">supprimer cet avis</a></div></div>';
                ?>
            </li> <?php

            echo'</ul>';
        }

        ?>
    </div>

</main>
<?php

require 'footer.php';
?>
