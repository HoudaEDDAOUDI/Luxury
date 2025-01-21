<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ici, vous retrouverez un site regroupant les meilleurs sacs de luxe.">
    <title>SAE203</title>
    <link rel="stylesheet" type ="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@400..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kalnia:wght@100..700&display=swap');
    </style>
</head>
<body>
    <header>
        <h1><a href="index.php">LUXURY</a></h1>
        <div id="menu">
                <nav class="menu2">
                    <ul>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == '../index.php') ? 'class="current"' : ''; ?>><a href="../index.php">Retourner sur le site</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'table1_gestion.php') ? 'class="current"' : ''; ?>><a href="table1_gestion.php">Les articles</a></li>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'table2_gestion.php') ? 'class="current"' : ''; ?>><a href="table2_gestion.php">Les marques</a></li>
                    </ul>
                </nav>
        </div>
    </header>