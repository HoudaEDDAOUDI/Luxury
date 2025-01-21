<?php
    include('header.php');
?>
<h2>gestion des données pour les articles</h2>
<a href="admin.php" class="retour">Retour</a>
    <hr>
    <a href="table1_new_form.php" class="retour">ajouter un album</a>
    <br>
    <table class="tabadmin">
        <thead>
            <tr>
                <td>id</td>
                <td>Nom</td>
                <td>Prix</td>
                <td>Matériaux</td>
                <td>Dimensions</td>
                <td>Pays d'origine</td>
                <td>Nom de la photo</td>
                <td>Photo</td>
                <td>Supprimer</td>
                <td>Modifier</td>
            </tr>
        </thead>
        <tbody>
    <?php
    include('../connexion.php');
    $mabd->query('SET NAMES utf8;');
    $req = "SELECT * FROM articles";
    $resultat = $mabd->query($req);

    foreach ($resultat as $value) {
        echo '<tr>' ;
        echo '<td>' . $value['art_id'] . '</td>';
        echo '<td>' . $value['art_nom'] . '</td>';
        echo '<td>' . $value['art_prix'] . '</td>';
        echo '<td>' . $value['art_materiaux'] . '</td>';
        echo '<td>' . $value['art_dimensions'] . '</td>';
        echo '<td>' . $value['art_pays_org'] . '</td>';
        echo '<td>' . $value['art_photo'] . '</td>';
        echo '<td><img src="../images/uploads/'.$value['art_photo'].'" alt="'.$value['art_photo'].'" width="100px"></td>';
        echo '<td><a href="table1_delete.php?num='.$value['art_id'].'">supprimer</a></td>';
        echo '<td><a href="table1_update_form.php?num='.$value['art_id'].'"> modifier </a> </td>';
        echo '</tr>';
    }
    ?>
