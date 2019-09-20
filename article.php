<?php


include_once 'Include/database_WSFIA.php';
include_once 'Include/functions.php';
include_once 'Include/function_Database.php';


var_dump($_GET);
$produitid = $_GET['id'];

//$db = MaConnexion();
$article = GetProduit($produitid);

?>

<?php include 'Header.php'; ?>


<main>
    <?php

    afficheArticle($article);

    ?>

</main>

<!--FOOTER -->
<?php include 'Footer.php'; ?>

