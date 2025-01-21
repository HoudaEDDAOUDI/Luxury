<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ici, vous retrouverez un site regroupant les meilleurs sacs de luxe.">
    <title>SAE203</title>
    <link rel="stylesheet" type ="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@400..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kalnia:wght@100..700&display=swap');
    </style>
</head>
<body>
    <header>
        <h1><a href="index.php">LUXURY</a></h1>
        <label for="sombre" class="container">
            <input id="sombre" checked="checked" type="checkbox">
                <svg viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="moon"><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"></path></svg>
                <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="sun"><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"></path></svg>
        </label>
        <div id="menu">
                <nav class="menu2">
                    <ul>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="current"' : ''; ?>><a href="index.php">Accueil</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'listing.php') ? 'class="current"' : ''; ?>><a href="listing.php">Nos sacs</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'form_recherche.php') ? 'class="current"' : ''; ?>><a href="form_recherche.php">Rechercher</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'admin/admin.php') ? 'class="current"' : ''; ?>><a href="admin/admin.php">Administration</a></li>
                    </ul>
                </nav>
        </div>
    </header>
