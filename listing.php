    <?php
        include('header.php');
    ?>
    <main>
        <h2>Notre Sélection</h2>

        <?php
        include('connexion.php');
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM articles INNER JOIN marques ON articles._mrq_id = marques.mrq_id";
        $resultat = $mabd->query($req);
        echo '<div id="tout_nos_articles">';
        foreach ($resultat as $value) {
            echo '<div class="sacs">' ;
            echo '<img src="images/uploads/'.$value['art_photo'].'" alt="'.$value['art_photo'].'">';
            echo '<h3>'.$value['art_nom'].'-'.$value['mrq_nom'].'</h3>';
            echo '<p>'.$value['art_prix'] . '</p>';
            echo '<div class="info">';
            echo '<div class="info_">';
            echo '<p>' . $value['art_dimensions'] . '</p>';
            echo '<p>|</p>';
            echo '<p>' . $value['art_materiaux'] . '</p>';
            echo '</div>';
            echo '<p>'.$value['art_pays_org'].'</p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div><hr>';
        ?>
    </main>
    <?php
        include('footer.php');
    ?>
