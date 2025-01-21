<?php
    include('header.php');
?>
    <!--------- ERREUR SUR _mrq_id------------>
    <a href="table2_gestion.php" class="retour">Retour</a>	
        <hr>
    <h2>Modifier une marque : Valid</h2>
    <h3>vous venez de modifier une marque</h3>
    <hr>
    <?php
    $num=$_GET['num'];
    $titre=$_GET['titre'];
    $pays=$_GET['pays'];
    $fondateur=$_GET['fondateur'];

    include('../connexion.php');
    $mabd->query('SET NAMES utf8;');
    $req = 'UPDATE marques SET mrq_nom="'.$titre.'",mrq_pays="'.$pays.'",mrq_fondateur="'.$fondateur.'" WHERE mrq_id="'.$num.'"';
    echo 'juste pour le debug:'.$req;
    $resultat = $mabd->query($req);
    ?>
    <br>
    <?php 
        echo '<a class="retour" href="table2_update_form.php?num='.$num.'">
                Recommencer
            </a>';
    ?>
</body>
</html>