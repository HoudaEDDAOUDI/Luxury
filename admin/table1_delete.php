<?php
    include('header.php');
?>
   <h2>Supprimer des articles</h2> 
   <hr>
   <a href="table1_gestion.php" class="retour">Retour</a>
   <?php
        // recupérer dans l'url l'id de l'album à supprimer
        $num=$_GET['num'];

        include('../connexion.php');
        $mabd->query('SET NAMES utf8;');

        // tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
        $req = 'DELETE FROM articles WHERE art_id='.$num.''; 

        $resultat = $mabd->query($req);

        echo '<p>vous venez de supprimer le sac numéro '.$num.'</p>';
    ?>
