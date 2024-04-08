<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php 
// Insertion du header
include("elements/header.php"); 
?>
<main>
    <div id="liste-oeuvres">
        <?php
        // Inclusion du fichier oeuvres.php
        include ('données/oeuvres.php');
        // Boucle pour crée les oeuvres a partir des données du tableau
        foreach ($oeuvres as $key => $oeuvre) {
        ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $key; ?>">
                    <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                    <h2><?php echo $oeuvre['titre']; ?></h2>
                    <p class="description"><?php echo $oeuvre['description']; ?></p>
                </a>
            </article>
        <?php
        }
        ?>
    </div>
</main>
<?php 
// Insertion du footer
include("elements/footer.php"); 
?>
</body>
</html>