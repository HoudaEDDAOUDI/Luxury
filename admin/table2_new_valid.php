<?php
    include('header.php');
?>
    <a href="table2_gestion.php" class="retour">Retour</a>
        <hr>
    <h2>gestion de nos albums</h2>
    <h3>vous venez d'ajouter une marque</h3>
    <hr>
    <?php
    $titre=$_POST['titre'];
    $pays=$_POST['pays'];
    $fondateur=$_POST['fondateur'];

    include('../connexion.php');
    $mabd->query('SET NAMES utf8;');
    $req = 'INSERT INTO marques(mrq_nom,mrq_pays,mrq_fondateur) VALUES("'.$titre.'","'.$pays.'","'.$fondateur.'")';
    echo $req;
    $resultat = $mabd->query($req);
    ?>
</body>
</html>