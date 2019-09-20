<?php
/**
* Created by PhpStorm.
* User: julien
* Date: 31/01/19
* Time: 13:35
*/

/*$articles = array(
1 => array('Nom' => "D3",
           'Prix' => 1849.99,
           'url' => 'photo/101d3-10020_2.jpg',
           'desc' => ''
           ),
2 => array('Nom' => "HO SYNDICATE ALPHA 2019",
'Prix' => 1599.99,
           'url' => 'photo/H90000006_1024x1024.jpg',
           'desc' => ''
           ),
3 => array('Nom' => "RADAR VAPOR PRO BUILD 2019",
'Prix' => 1799.99,
           'url' => '19000045341635_1024x1024.jpg',
           'desc' => 'Voici le plus léger ski du marché avec son nouveau carbone PMI utilisé dans l\'industrie de l’aérospatiale'
           ),
)
*/
$produit1 = array("Nom" => "D3 NRG 2019",
"Prix" => 1849.99,
"url" => "photo/D3-NRG.jpg",
"desc" => "Le ski EVO est l\'évolution du ski ARC (plus large sur toute sa surface)
Cela permet d\'avoir un ski plus rapide ainsi que plus stable. 
Vous ne perdrez pas en rotation dans les virages avec ce ski a d\'avantage de concavité.
Ce ski a la caractéristique de tourner très rond, idéal pour tous les skieurs cherchant un ski performant mais pardonnant les erreurs "
           );
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

<header>
<h1 class="text-center">E-Shop</h1>
</header>

<main>
<?php

//foreach ($produit1 as $value){
?>


    <div class="card text-center" style="width: 50rem;">
        <img src="<?php echo $produit1["url"]; ?>" class="card-img-top img-fluid w-25" alt="photo_D3">
        <div class="card-body">
            <h3 class="card-title"><?php echo $produit1["Nom"];?></h3>
            <p class="card-text"><?php echo $produit1["desc"];?></p>
            <p class="card-text btn btn-primary"><?php echo $produit1["Prix"];?>$</p>
        </div>
    </div>

<?php
//}
?>
</main>


</body>
</html>
