<?php

//function MaConnexion()
//{
try {
    $bdd = new PDO('mysql:host=localhost;dbname=Boutique;charset=utf8', 'julien', 'Juju26500')
    or die("Impossible de se connecter au serveur");
    return $bdd;
}catch(PDOException $e){
    echo "error".$e;
}
//}

function GetProduits()
{
    global $bdd;
    $stmt = $bdd->query('select * from Article');
    $result = $stmt->fetchAll();
    return $result;

}

/* fonction avec requète*/
function GetProduit($id)
{

    global $bdd;
    $stmt = $bdd->prepare('select * from Article where idArticle= :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

function insertArticle($Nom,$Description,$Prix,$Stock){
    global $bdd;
    $stmt = $bdd ->prepare("INSERT INTO Article (Nom, Description, Prix, Stock) VALUES (:Nom, :Description, :Prix, :Stock)");
    $stmt -> bindParam(':Nom', $Nom, PDO::PARAM_STR);
    $stmt -> bindParam(':Description', $Description,PDO::PARAM_STR);
    $stmt -> bindParam(':Prix', $Prix, PDO::PARAM_INT);
    $stmt -> bindParam(':Stock', $Stock,PDO::PARAM_INT);
    $stmt -> execute();
}

function MajStock(){
    global $bdd;
    $stmt = $bdd ->prepare("UPDATE Article set Stock = (Stock - :qtepanier) Where Article.idArticle = :id");
    $stmt -> bindParam(':qtepanier', $orderqte['qty'],PDO::PARAM_INT);
    $stmt -> bindParam(':id', $orderqty['id'],PDO::PARAM_INT);

}
/* fonction2 avec requète
function GetProduit2($connexionbdd, $produitid)
{
    $sql = 'select * from Article where idArticle=?';
    $stmt = $connexionbdd->prepare($sql);
    $stmt->execute([$produitid]);

    $result = $stmt->fetch();
    return $result;
}*/