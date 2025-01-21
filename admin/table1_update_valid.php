<?php
    include('header.php');
?>
    <!------------- NE MARCHE PAS ------------>
    <a href="table1_gestion.php" class="retour">Retour</a>
        <hr>
    <h2>Modifier un article : Valid</h2>
    <h3>vous venez de modifier un article</h3>
    <hr>
    <?php
    $titre=$_POST['titre'];
    $prix=$_POST['prix'];
    $materiaux=$_POST['materiaux'];
    $dimension=$_POST['dimensions'];
    $pays=$_POST['pays'];
    $numarticles=$_POST['numarticles'];
    $num=$_POST['num'];

    include('../connexion.php');
    $mabd->query('SET NAMES utf8;');

    $imageName=$_FILES["photo"]["name"];
    if($imageName!=""){
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
	

    		// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
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

    $req = 'UPDATE articles SET art_nom="'.$titre.'",art_prix="'.$prix.'",art_materiaux="'.$materiaux.'",art_dimensions="'.$dimension.'",art_pays_org="'.$pays.'",art_photo="'.$nouvelleImage.'",_mrq_id="'.$numarticles.'" WHERE art_id="'.$num.'"';
        }
        else{
            $req = 'UPDATE articles SET art_nom="'.$titre.'",art_prix="'.$prix.'",art_materiaux="'.$materiaux.'",art_dimensions="'.$dimension.'",art_pays_org="'.$pays.'",_mrq_id="'.$numarticles.'" WHERE art_id="'.$num.'"';
        }
    echo 'juste pour le debug:'.$req;
    $resultat = $mabd->query($req);
    ?>
    <?php 
        echo '<a class="retour" href="table1_update_form.php?num='.$num.'">
                Recommencer
            </a>';
    ?>
</body>
</html>