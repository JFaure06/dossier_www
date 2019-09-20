<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 31/01/19
 * Time: 13:35
 */

$articles = array(
1 => array("Nom" => "D3 EVO/NRG 2019",
           "Prix" => 1849.99,
           "url" => "photo/101d3-10020_2.jpg",
           ),
2 => array("Nom" => "HO SYNDICATE ALPHA 2019",
"Prix" => 1599.99,
           "url" => "photo/H90000006_1024x1024.jpg",
           ),

3 => array("Nom" => "RADAR VAPOR PRO BUILD 2019",
"Prix" => 1799.99,
           "url" => "19000045341635_1024x1024.jpg",
           ),
);

/*$articles = array("Nom" => "D3 NRG 2019",
    "Prix" => 1849.99,
    "url" => "photo/D3-NRG.jpg",
    "desc" => "Le ski EVO est l\"évolution du ski ARC (plus large sur toute sa surface)
Cela permet d\"avoir un ski plus rapide ainsi que plus stable. 
Vous ne perdrez pas en rotation dans les virages avec ce ski a d\"avantage de concavité.
Ce ski a la caractéristique de tourner très rond, idéal pour tous les skieurs cherchant un ski performant mais pardonnant les erreurs "
);*/
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waterski and French in The Alps</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <link rel="stylesheet" href="boutique.css">
</head>

<body>

<!--HEADER -->

<header class="header-home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="boutique.php"><i class="material-icons text-warning">home</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produits.php">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-5 pt-5">

        <div class="row p-2 d-flex flex-column flex-md-row">

            <div class="col-md-4 container-fluid d-flex justify-content-center align-items-center order-1 order-md-1">
                <h2 class="order-3 text-info text-secondary">SKIS DE SLALOM</h2>
            </div>

            <div class="col-md-8 container-fluid d-flex align-items-center order-2 order-md-2">
                <p class="">Découvrez un grand choix de ski de slalom pour homme, femme et enfant. Que vous soyez amateur ou compétiteur, vous trouverez une large gamme de monoskis nautique parmi les plus grandes marques comme D3, Radar et HO.

                    Notre gamme de ski de slalom de compétition 100% carbone et ultra léger.

                    Vous pouvez contacter directement notre conseiller (coatch de ski nautique) qui répondra à toutes vos questions techniques et vous proposera un devis complet et adapté à votre gabarit, niveau et budget. </p>
            </div>

        </div>
    </div>
</header>

<main>
    <?php

    foreach ($articles as $value){
    ?>


    <div class="card text-center" style="width: 50rem;">
        <img src="<?php echo $articles["url"]; ?>" class="card-img-top img-article" alt="photo_Ski">
        <div class="card-body">
            <h3 class="card-title"><?php echo $articles["Nom"];?></h3>
            <p class="card-text btn btn-primary"><?php echo $articles["Prix"];?>$</p>
        </div>
    </div>


        <?php
    }
    ?>
</main>


</body>
</html>
