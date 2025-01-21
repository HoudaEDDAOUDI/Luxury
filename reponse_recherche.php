    <?php
        include('header.php');
    ?>
    <main>
    <div class="recherche">
            <img src="images/bande_luxury.png" alt="bande luxury">
            <div id="recherche2">
                <h2>Trouvez le sac parfait</h2>
                <form action="reponse_recherche.php" method="GET">
                    <label for="recherche">.</label>
                    <select name="recherche" id="recherche">
                        <?php
                            include('connexion.php');
                            $mabd->query('SET NAMES utf8;');
                            $req = "SELECT * FROM marques ORDER BY mrq_nom ASC"; // Ajout de l'ordre alphabétique ASC
                            $resultat = $mabd->query($req);

                            foreach ($resultat as $value){          
                                echo '<option value="'.$value['mrq_nom'].'">'.$value['mrq_nom'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Chercher" id="boutton_">
                </form>
            </div>
    </div>
    <?php

        if(isset($_GET['recherche'])) {
            $recherche = $_GET['recherche'];
        }

        include('connexion.php');
        $mabd->query('SET NAMES utf8;');
        $req= 'SELECT * FROM articles INNER JOIN marques ON articles._mrq_id = marques.mrq_id WHERE mrq_nom LIKE "%'.$recherche.'%" ';
        $resultat=$mabd->query($req);
    ?>
        <p id="resultat">Les sacs de la marque <strong><?php echo $recherche; ?></strong> disponible sont les suivant:</p>
        
    <?php
        echo '<div id="tout_nos_articles">';
        foreach ($resultat as $value) {
            echo '<div class="sacs_">';
            echo '<p></p> <img src="images/uploads/'.$value['art_photo'].'" alt="'.$value['art_photo'].'">';
            echo '<h3>'.$value['art_nom'].'-'.$value['mrq_nom'].'</h3>';
            echo '<p>'.$value['art_prix']. '</p>';
            echo '<div class="info">';
            echo '<div class="info_">';
            echo '<p>' . $value['art_dimensions'] . ' pages </p>';
            echo '|';
            echo '<p>' . $value['art_materiaux'] . ' euro </p>';
            echo '</div>';
            echo '<p>'.$value['art_pays_org'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    ?>
    <input type="button" class="retour" value="Retour" onclick=" history.back();">
    </main>
    <?php
        include('footer.php');
    ?>
