<?php
    include('header.php');
?>

<h2>gestion des données pour les articles</h2>
<a href="admin.php" class="retour">Retour</a>
    <hr>
    <a href="table2_new_form.php" class="retour">ajouter un album</a>
    <br>
    <table class="tabadmin">
        <thead>
            <tr>
                <td>Nom</td>
                <td>Pays</td>
                <td>fondateur</td>
                <td>Supprimer</td>
                <td>Modifier</td>
            </tr>
        </thead>
        <tbody>
    <?php
    include('../connexion.php');
    $mabd->query('SET NAMES utf8;');
    $req = "SELECT * FROM marques";
    $resultat = $mabd->query($req);

    foreach ($resultat as $value) {
        echo '<tr>' ;
        echo '<td>' . $value['mrq_nom'] . '</td>';
        echo '<td>' . $value['mrq_pays'] . '</td>';
        echo '<td>' . $value['mrq_fondateur'] . '</td>';
        echo '<td> <a href="table2_delete.php?num='.$value['mrq_id'].'">supprimer</a></td>';
        echo '<td> <a href="table2_update_form.php?num='.$value['mrq_id'].'"> modifier </a> </td>';
        echo '</tr>';
    }
    ?>
</body>
</html>