<?php
    include('header.php');
?>
    <a href="table2_gestion.php" class="retour">Retour</a> 	
        <hr>
    <h2>Ajout d'une marque</h2>
    <hr>
    <?php
        include('../connexion.php');
        $mabd->query('SET NAMES utf8;');
        $req = 'SELECT * FROM  marques INNER JOIN articles ON articles._mrq_id=marques.mrq_id';
    ?>

    <form method="POST" action="table2_new_valid.php">
        Nom:<input type="text" name="titre" ><br>
        Pays:<input type="text" name="pays" ><br>
        Fondateur:<input type="text" name="fondateur" ><br>
        <br>  
        <input type="submit" name="">
    </form>
</body>
</html>