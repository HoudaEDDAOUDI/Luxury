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
                    <select id="recherche" name="recherche">
                        <option value="" disabled selected hidden>Choisissez une marque</option>
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
    </main>
    <?php
        include('footer.php');
    ?>
    
