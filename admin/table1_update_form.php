<?php
    include('header.php');
?>
    <!------------- le valid de cette page NE MARCHE PAS ------------>
    <a href="table1_gestion.php" class="retour">Retour</a> 	
	<hr>
    <h2>Modifier un article</h2>
    <p>Artcles que vous voulez modifier:</p>
    <?php
        $num = $_GET['num'];
        include('../connexion.php');
        $mabd->query('SET NAMES utf8;');
        $req = 'SELECT * FROM  articles WHERE art_id='.$num.'';
        $resultat = $mabd->query($req);
        $articles = $resultat->fetch();
    ?>
    <hr>
    <hr>

<div class="recherche">  
    <div id="recherche2">
        <form method="POST" action="table1_update_valid.php" enctype="multipart/form-data">
            <input type="hidden" name="num"  value="<?php echo $articles['art_id']; ?>">
            Nom:<input type="text" name="titre" value="<?php echo $articles['art_nom'];?>"><br>
            Prix:<input type="text" name="prix" value="<?php echo $articles['art_prix'];?>"><br>
            Matériaux:<input type="text" name="materiaux" value="<?php echo $articles['art_materiaux'];?>"><br>
            Dimensions:<input type="text" name="dimensions" value="<?php echo $articles['art_dimensions'];?>"><br>
            Pays d'origine:<input type="text" name="pays" value="<?php echo $articles['art_pays_org'];?>"><br>
            Photo:<input type="file" name="photo" value="<?php echo $articles['art_photo'];?>"><br>
            Marques:
            <select name="numarticles">
                <?php
                include('../connexion.php');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM marques ORDER BY mrq_nom ASC";
                $resultat = $mabd->query($req);

                foreach ($resultat as $value){
                    $selection="";
                    if($articles['_mrq_id'] == $value['mrq_id']) $selection="selected";          
                    echo '<option '.$selection.' value="'.$value['mrq_id'].'">'.$value['mrq_nom'].'</option>';
                }
                ?>
            </select>
            <br>   
            <input type="submit" name="">
        </form>
    </div>
</div>  

</body>
</html>