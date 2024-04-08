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
    <?php
    // Insertion des données du tableau oeuvres.php 
    include ('données/oeuvres.php');
    // Verifie si l'id est bien présent dans l'URL
    if (isset($_GET['id']) && 
    // Verfie si l'id existe dans le tableau $oeuvres
    array_key_exists($_GET['id'], $oeuvres)){
        //Association de la variable $id a l'id de l'url uniquement si l'id est présent dans le tableau $oeuvres
        $id = $_GET['id'];
    // Si l'id n'est pas présent dans le tableau $oeuvres alors afficher page 404.
    } else include('404.php');
    // association de la variable $oeuvre aux données du tableau $oeuvres correspondant a l'id de l'url
    $oeuvre = $oeuvres[$id]; {
    ?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['titre']; ?></h1>
            <p class="description"><?php echo $oeuvre['description']; ?></p>
            <p class="description-complete">
                <?php echo $oeuvre['description_complete']; ?>
            </p>
        </div>
    </article>
    <?php
    }
    ?>
</main>
<?php 
// Insertion du footer
include("elements/footer.php"); 
?>
</body>
</html>
