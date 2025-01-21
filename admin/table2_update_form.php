<?php
    include('header.php');
?>
    <a href="table2_gestion.php" class="retour">Retour</a> 	
	<hr>
    <h2>Modifier une marque</h2>
    <p>Marque que vous voulez modifier:</p>
        <?php
            $num = $_GET['num'];
            include('../connexion.php');
            $mabd->query('SET NAMES utf8;');
            $req = 'SELECT * FROM  marques WHERE mrq_id='.$num.'';
            $resultat = $mabd->query($req);
            $marques = $resultat->fetch();
            echo $marques['mrq_nom'];
            echo $marques['mrq_pays'];
            echo $marques['mrq_fondateur'];
        ?>
        <hr>
        <hr>
    <form method="GET" action="table2_update_valid.php">
        <input type="hidden" name="num"  value="<?php echo $marques['mrq_id']; ?>">
        Nom:<input type="text" name="titre" value="<?php echo $marques['mrq_nom'];?>"><br>
        Pays d'origine:<input type="text" name="pays" value="<?php echo $marques['mrq_pays'];?>"><br>
        Fondateur:<input type="text" name="fondateur" value="<?php echo $marques['mrq_fondateur'];?>"><br>
        Auteur:
        <select name="nummarques">
            <?php
            include('../connexion.php');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM marques";
            $resultat = $mabd->query($req);

                foreach ($resultat as $value){
                    $selection="";
                    if($marques['_mrq_id'] == $value['mrq_id']) $selection="selected";          
                    echo '<option '.$selection.'value="'.$value['mrq_id'].'">'.$value['mrq_nom'].'</option>';
                }
            ?>
        </select>
        <br>   
        <input type="submit" name="">
    </form>
</body>
</html>