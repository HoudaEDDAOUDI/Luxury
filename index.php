    <?php
        include('header.php');
    ?>
    <main>
        <div id='images'>
                <div class="gauche1"><img src="images/femme_noir_blanc.png"  alt="image en noir et blanc"></div>
                <div class="droite1"><img src="images/chanel_sac.png"  alt="sac chanel"></div>
                <div class="gauche2"><img src="images/prada.png" alt="sac prada"></div>
                <div class="droite2"><img src="images/femme_noir_blanc2.png" alt="sac noir et blanc"></div>
        </div>
<?php
include('connexion.php');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM articles INNER JOIN marques ON articles._mrq_id = marques.mrq_id LIMIT 12"; // Limite à un seul enregistrement
$resultat = $mabd->query($req);
?>
<h2 class="h2">Notre selection de sac</h2>
    <div id="scroll">
        <button class="prev" aria-label="suivant"></button>
        <div class="slider">
                <?php
                $articles_par_diapositive = 1; // Par défaut, un article par diapositive
                // Pour les écrans larges (ordinateurs), afficher 3 articles par diapositive
                foreach ($resultat as $value) {
                    echo '<div class="slide">';
                    echo '<div class="sacs">';
                        echo '<p></p> <img src="images/uploads/'.$value['art_photo'].'" alt="'.$value['art_photo'].'">';
                        echo '<h3>'.$value['art_nom'].'-'.$value['mrq_nom'].'</h3>';
                        echo '<p>'.$value['art_prix'] . '</p>';
                        echo '<div class="info">';
                            echo '<div class="info_">';
                                echo '<p>' . $value['art_dimensions'] . '</p>';
                                echo '<p>|</p>';
                                echo '<p>' . $value['art_materiaux'] . '</p>';
                            echo '</div>';
                            echo '<p>'.$value['art_pays_org'] . '</p>';
                        echo '</div>';
                    echo '</div>';
                    
                    // Si nous avons affiché 3 articles, fermer la diapositive et ouvrir une nouvelle
                    if ($articles_par_diapositive == 3) {
                        echo '</div><div class="slide">';
                        $articles_par_diapositive = 1; // Réinitialiser le compteur
                    }
                    // $articles_par_diapositive++; // Incrémenter le compteur
                    echo '</div>';
                }
                ?>
        </div>
        <button class="next" aria-label="précédente"></button>
    </div>
    </main>
    <script>
        const slider = document.querySelector('.slider');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');

        prevButton.addEventListener('click', () => {
        slider.scrollBy({
        left: -slider.offsetWidth,
        behavior: 'smooth'
        });
        });
        
        nextButton.addEventListener('click', () => {
        slider.scrollBy({
        left: slider.offsetWidth,
        behavior: 'smooth'
        });
            });
    </script>
    <?php
        include('footer.php');
    ?>
