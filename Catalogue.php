<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 31/01/19
 * Time: 13:35
 */

include_once 'functions.php';
include_once 'function_Database.php';

$db = MaConnexion();
$var = GetProduit($db);



?>


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

                    Vous pouvez contacter directement notre conseiller (coatch de ski nautique) qui répondra à toutes
                    vos questions techniques et vous proposera un devis complet et adapté à votre gabarit, niveau et
                    budget. </p>
            </div>

        </div>
    </div>
</header>
