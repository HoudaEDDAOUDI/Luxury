<?php
    include('header.php');
?>
    <a href="table1_gestion.php" class="retour">Retour</a> 	
        <hr>
    <h2>Ajout d'un article</h2>
    <hr>
    <?php
        include('../connexion.php');
        $mabd->query('SET NAMES utf8;');
        $req = 'SELECT * FROM  articles INNER JOIN marques ON articles._mrq_id=marques.mrq_id';
    ?>

    <form method="POST" action="table1_new_valid.php" enctype="multipart/form-data">
        Nom:<input type="text" name="titre" ><br>
        Prix:<input type="text" name="prix" ><br>
        Matériaux:<input type="text" name="materiaux" ><br>
        Dimensions:<input type="text" name="dimensions" ><br>
        Pays d'origine:<input type="text" name="pays" ><br>
        Photo:<input type="file" name="photo" required /><br />
        Marques:
        <select name="numarticles">
            <?php
            include('../connexion.php');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM marques";
            $resultat = $mabd->query($req);

            foreach ($resultat as $value){        
                echo '<option value="'.$value['mrq_id'].'">'.$value['mrq_nom'].'</option>';
            }
            ?>
        </select>
        <br>   
        <input type="submit" name="ajouter">
    </form>
    <?php
    include('footer.php');
?>