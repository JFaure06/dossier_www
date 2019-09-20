<?php

/* ma fonction est composé d'une card qui reçois les information de mes articles*/
function afficheCatalogue(array $article)
{

    ?>
    <div class="col-md-6">
        <div class="card text-center shadow p-3 mb-5 bg-grey rounded" style="width: 50rem;">
            <a href="article.php?id=<?php echo $article["idArticle"]; ?>">
                <img src="photo/Catalogue/Ski/<?php echo $article["Image"]; ?>" class="card-img-top img-article w-25"
                     alt="photo_Ski">

            </a>
            <div class="card-body">
                <h3 class="card-title"><?php echo $article["Nom"]; ?></h3>
                <p class="card-text btn btn-primary"><?php echo $article["Prix"]; ?> $</p>
            </div>
            <input type="checkbox" name="produit[]" id="<?php echo $article["idArticle"]; ?>"
                   value="<?php echo $article["idArticle"]; ?>" class="container-fluid d-flex justify-align-center"/>
            <label for="case">Add to Card</label>
        </div>
    </div>

    <?php
}

/* ma fonction affiche le contenue et description des mes articles venant de ma BDD*/
function afficheArticle($article)
{

    ?>

    <h1 class="text-center titreArticle"><?php echo $article ["Nom"] ?></h1>
    <div class="container-fluid mt-5">
        <div class="row d-flex align-items-center">
            <img src="photo/Catalogue/Ski/<?php echo $article ["Image"]; ?>" class="img-fluid col-md-3 order-1">

            <article class="col-md-9 justify-items-center order-2">
                <p><?php echo $article ["Description"] ?></p>
            </article>
        </div>
    </div>
    <div class="text-center">
        <p class="btn btn-primary btn-lg mt-5 "><?php echo $article ["Prix"] ?>$</p>
    </div>


    <?php
}


function articlePanier($panier, $quantite)
{
    ?>

    <div class="d-flex justify-content-center">
        <div class="card text-center shadow p-3 mb-5 bg-grey rounded row" style="width: 50rem;">

            <img src="Catalogue/photo/Ski/<?php echo $panier["Image"]; ?>" class="card-img-top img-article"
                 alt="photo_Ski">

            <div class="card-body">
                <h3 class="card-title"><?php echo $panier["Nom"]; ?></h3>
                <p class="card-text btn btn-primary"><?php echo $panier["Prix"]; ?> $</p>
            </div>


            <select name="qt<?php echo $panier["idArticle"]; ?>" class="w-25">

                <option <?php if ($quantite == 1) {
                    echo "selected";
                } ?> value="1">1
                </option>
                <option <?php if ($quantite == 2) {
                    echo "selected";
                } ?> value="2">2
                </option>
                <option <?php if ($quantite == 3) {
                    echo "selected";
                } ?> value="3">3
                </option>
                <option <?php if ($quantite == 4) {
                    echo "selected";
                } ?> value="4">4
                </option>
            </select>

            <input type="hidden" name="<?php echo $panier["idArticle"]; ?>" id="<?php echo $panier["idArticle"]; ?>"
                   value="on"
                   class="container-fluid d-flex justify-align-center"/>
            <input type="submit" value="delete" name="delete<?php echo $panier["idArticle"]; ?>"
                   class="btn btn-danger w-25">
        </div>
    </div>

    <?php
}


function totalPanier()
{
    $liste = $_POST();
    $total = 0;
    foreach ($liste as $panier)
    {
        $total += $panier["Prix"] * $_POST["qt"];
    }
    return $total;
}


function creationPanier()
{
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();

    }
    return true;
}


function ajouterArticle($id, $Nom, $Qts, $Prix)
{

//Si le panier existe
    /*if (creationPanier() ) {*/
//Si le produit existe déjà on ajoute seulement la quantité
    $positionProduit = array_search($id, $_SESSION['panier']);

    if ($positionProduit != false) {
        $_SESSION['panier'][$id]['qts'] += $Qts;
    } else {
//Sinon on ajoute le produit
        $_SESSION['panier'][$id] = [
            'Nom' => $Nom,
            'Qts' => $Qts,
            'Prix' => $Prix,
        ];

    }
    /*} else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";*/
}


function supprimerArticle($id)
{
    unset($_SESSION['panier'][$id]);
    //Si le panier existe
    /*if (creationPanier() && !isVerrouille()) {
        $tmp = array();
        $tmp['Nom'] = array();
        $tmp['Qts'] = array();
        $tmp['Prix'] = array();
        $tmp['verrou'] = $_SESSION['panier']['verrou'];

        for ($i = 0; $i < count($_SESSION['panier']['Nom']); $i++) {
            if ($_SESSION['panier']['Nom'][$i] !== $Nom) {
                array_push($tmp['Nom'], $_SESSION['panier']['Nom'][$i]);
                array_push($tmp['Qts'], $_SESSION['panier']['Qts'][$i]);
                array_push($tmp['Prix'], $_SESSION['panier']['Prix'][$i]);
            }

        }

        $_SESSION['panier'] = $tmp;
        //j'efface mon panier temporaire
        unset($tmp);
    } else
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";*/
}


function MontantGlobal()
{
    $total = 0;
    foreach ($_SESSION['panier'] as $articledupanier) {
        $total += ($articledupanier['price'] * $articledupanier['qte']);
    }
    return $total;
}

function calculFraisdeport()
{
    $poidspanier = 0;
    foreach ($_SESSION['panier'] as $articledupanier) {

        $poidspanier += $articledupanier['Weight'];


        if ($poidspanier > 0 && $poidspanier < 500) {

            $fraisdeport = 5;

        } elseif ($poidspanier >= 500 && $poidspanier < 2000) {

            $fraisdeport = $articledupanier['Weight'] * 0.1;

        } else {

            $fraisdeport = $articledupanier['Weight'] * 0;

        }
    }

    return $fraisdeport;
}

