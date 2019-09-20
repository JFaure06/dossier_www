<?php

session_start();


include_once 'Include/functions.php';
require 'Include/function_Database.php';

//$db = MaConnexion();
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

//Ajout un article au panier
if (isset($_POST['ajoutPanier'])) {
    foreach ($_POST['produit'] as $article) {


        if (array_key_exists($article, $_SESSION['panier'])) {
            //var_dump("maj");
            $_SESSION['panier'][$article]['qte']++;
        } else {
//Sinon on ajoute le produit
            //var_dump("ajout");
            $articleSelect = GetProduit("toto", $article);

            $_SESSION['panier'][$article] = [
                'id' => $articleSelect['idArticle'],
                'img' => $articleSelect['Image'],
                'name' => $articleSelect['Nom'],
                'qte' => 1,
                'price' => $articleSelect['Prix'],
                'Weight' => $articleSelect['Poids'],
            ];

        }

    }
}
//var_dump($_SESSION['panier']);

// Modification des articles dans la session
if (isset($_POST['modificationArticle'])) {
//
    foreach ($_POST['quantite'] as $id => $qts) {

        $_SESSION['panier'][$id]['qte'] = $qts;

    }

}

// Suppression d'un article dans la session
if (isset($_POST['suppressionArticle'])) {
    //
    unset($_SESSION['panier'][$_POST['suppressionArticle']]);
}

// Suppression du panier
if (isset($_POST['deletetocard'])) {

    unset($_SESSION['panier']);
    $_SESSION['panier'] = array();
}

// Maj Stock
if (isset($_POST['validationCommande'])){
    foreach ()
}

// Code de listage et de calcul du total
$ttc = MontantGlobal();

//Calcule des frais de port
$fdp = calculFraisdeport();

include 'Header.php';
?>
<form method="post" action="panier_2.php">

    <table class="table">
        <thead>
        <tr>

            <th>Nom</th>
            <th>prix par article</th>
            <th>quantité</th>

        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($_SESSION['panier'] as $articledupanier) {
            ?>
            <tr>
                <td>
                    <?= $articledupanier['name'] ?>
                </td>
                <td>
                    <?= number_format($articledupanier['price'] * $articledupanier['qte'], 2, ',', ' ') ?> $
                </td>
                <td>
                    <input type="number" name="quantite[<?= $articledupanier['id']; ?>]"
                           value="<?= $articledupanier['qte']; ?>"/>
                    <button name="suppressionArticle" type="submit" value="<?= $articledupanier['id']; ?>"
                            class="btn btn-warning">delete
                    </button>

                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        <tfoot>
        <tr>

            <td>Frais de port : <?= number_format($fdp, 2, ',', ' ') ?></td>

        </tr>
        <tr>
            <td>Tva 20%</td>
        </tr>
        <tr>
            <td>Total <?= number_format($ttc, 2, ',', ' ') ?> $ ttc</td>
        </tr>
        </tfoot>
    </table>
    <input type="submit" name="validationCommande" value="valider le panier" class="btn btn-dark">
    <input type="submit" name="modificationArticle" value="refresh" class="btn btn-dark">
    <input type="submit" name="deletetocard" value="Vider le panier" class="btn btn-danger">

</form>