<?php
    include('header.php');
?>
    <a href="table1_gestion.php" class="retour">Retour</a>
        <hr>
    <h2>gestion de nos albums</h2>
    <h3>vous venez d'ajouter un article</h3>
    <hr>
    <?php
    $titre=$_POST['titre'];
    $prix=$_POST['prix'];
    $materiaux=$_POST['materiaux'];
    $dimensions=$_POST['dimensions'];
    $pays=$_POST['pays'];
    $numarticles=$_POST['numarticles'];
    
    include('../connexion.php');
    $mabd->query('SET NAMES utf8;');

    //vérification du format de l'image téléchargée
	$imageType=$_FILES["photo"]["type"];
	    if ( ($imageType != "image/png") &&
	        ($imageType != "image/jpg") &&
	        ($imageType != "image/jpeg") ) {
	            echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	            echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	        die();
	}
    
    //creation d'un nouveau nom pour cette image téléchargée
    // pour éviter d'avoir 2 fichiers avec le même nom
	$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];

    // dépot du fichier téléchargé dans le dossier /var/www/r214/images/uploads
    if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
        if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
        "../images/uploads/".$nouvelleImage)) {
            echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
            die();
        }
    } else {
        echo '<p>Problème : image non chargée...</p>'."\n";
        die();
    }

    $req = 'INSERT INTO articles(art_nom,art_prix,art_materiaux,art_dimensions,art_pays_org,art_photo,_mrq_id) VALUES("'.$titre.'","'.$prix.'","'.$materiaux.'","'.$dimensions.'","'.$pays.'","'.$nouvelleImage.'","'.$numarticles.'")';
    // echo $req;
    $resultat = $mabd->query($req);
    ?>
<?php
    include('footer.php');
?>