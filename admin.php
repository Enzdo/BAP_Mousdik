<?php

require 'header.php';
require 'class/connection.php';
require_once 'class/classPiano.php';

$connection = new Connection();
?>
<main>
    <h5>Admin</h5>
    <form method="POST">
        <input type="file" id="Pimage" name="image" placeholder="Image du piano">
        <input type="text" id="Pname" name="name" placeholder="Nom du piano">
        <input type="text" id="Pmarque" name="brand" placeholder="Marque du piano">
        <input type="text" id="Pprix" name="price" placeholder="Prix du piano">
        <input type="submit" value="VALIDER" id="submit">
    </form>

    <?php
    if($_POST){
        $piano = new piano(
            $_POST['name'],
            $_POST['brand'],
            $_POST['price'],
            $_POST['image']
    );

        //save to databse

        //print_r($_SESSION['user'][0]['id']);

        $result = $connection->insertPiano($piano);

        if ($result){
            echo 'Vous avez ajouté votre piano avec succés !';
        } else {
            echo 'L\'opération a échouée';
        }
    }
    ?>

    <h5>Vos Pianos</h5>
    <div>
        <?php
        $myPianos = $connection->getAllPiano();

        foreach ($myPianos as $value){

            echo'<ul>';
            ?>
            <li>
                <?php
                echo "<p>".$value['name'].' / '.$value['price'].'€ / '.$value['date']."</p>";
                echo '<a href="deletePiano.php?id='. $value['id'].'">supprimer ce piano</a>';
                ?>
            </li> <?php

            echo'</ul>';
        }

        ?>
    </div>

    <h5>Vos Avis</h5>
    <div></div>

</main>
<?php

require 'footer.php';
?>
