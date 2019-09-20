<?php

session_start();

include_once 'Include/functions.php';
include_once 'Include/database_WSFIA.php';
include_once 'Include/function_Database.php';

$db = MaConnexion();
$var = GetProduits($db);

if (isset($_POST["qt"])) {

} else {
    $select = 1;
}

foreach ($articles as $panier) {
    /* si dans ma recherche pas clé existe j'affiche*/
    if (array_key_exists($panier["id"], $_POST)) {
        /*j'appel ma fonction*/

    }
}

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waterski and French in The Alps</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" href="boutique.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>

<!--HEADER -->
<?php include 'Header.php'; ?>


<main>
    <h1>Panier</h1>

    <form method="post" action="panier.php">
        <p class="mt-2">Commande :</p>
        <?php
        /*initialisation du total a 0*/
        $total = 0;
        /*une boucle qui parcours mon tableau d'articles et celui mon panier*/
        foreach ($articles as $panier) {
            /* si dans ma recherche pas clé existe j'affiche*/
            if (array_key_exists($panier["id"], $_POST)) {
                /*j'appel ma fonction*/

                $quantite = "qt" . $panier["id"];
                $delete = "delete" . $panier["id"];

                if (isset($_POST[$delete])) {
                    echo "delete";
                }

                /*articlePanier($panier, $_POST[$quantite]);*/

                if (isset($_POST[$quantite])) {
                    $total += $panier["Prix"] * $_POST[$quantite];
                } else {
                    $total += $panier["Prix"];
                }

            }

        }

        echo $total . " $";
        ?>
        <input type="submit" value="refresh" class="btn btn-dark">
    </form>


</main>

<!--FOOTER -->
<?php include 'Footer.php'; ?>

</body>
</html>