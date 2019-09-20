<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 04/02/19
 * Time: 10:43
 */

include_once 'database_WSFIA.php';
include_once 'functions.php';
include_once 'function_Database.php';

var_dump($_GET);
$produitid = $_GET['id'];

$db = MaConnexion();
$article = GetProduit($db);

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
</head>

<body>

<!--HEADER -->

<header class="header-home ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="boutique.php"><i class="material-icons text-warning">home</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catalogue.php">catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-5 pt-5">

        <div class="row p-2 d-flex flex-column flex-md-row">

            <div class="col-md-4 align-items-center order-1 order-md-1">
                <h2 class="text-info text-secondary">SKIS DE SLALOM</h2>
            </div>

            <div class="col-md-8 container-fluid d-flex align-items-center order-2 order-md-2">
                <p class="">Découvrez un grand choix de ski de slalom pour homme, femme et enfant. Que vous soyez
                    amateur ou compétiteur, vous trouverez une large gamme de monoskis nautique parmi les plus grandes
                    marques comme D3, Radar et HO.

                    Notre gamme de ski de slalom de compétition 100% carbone et ultra léger.

                    Vous pouvez contacter directement notre conseiller (coach de ski nautique) qui répondra à toutes
                    vos questions techniques et vous proposera un devis complet et adapté à votre gabarit, niveau et
                    budget. </p>
            </div>

        </div>
    </div>
</header>

<main>
<?php


            afficheArticle($article);


?>






</main>
</body>
</html>

