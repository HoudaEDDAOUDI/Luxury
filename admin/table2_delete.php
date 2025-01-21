<?php
    include('header.php');
?>
    <a href="table2_gestion.php" class="retour">Retour</a>
   <h2>Supprimer des marques</h2> 
   <hr>
   <?php
        // recupérer dans l'url l'id de l'album à supprimer
        $num=$_GET['num'];

        include('../connexion.php');
        $mabd->query('SET NAMES utf8;');

        // tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
        $req = 'DELETE FROM marques WHERE mrq_id='.$num.''; 

        $resultat = $mabd->query($req);

        echo '<p>vous venez de supprimer la marque numéro '.$num.'</p>';
    ?>
</body>
</html>