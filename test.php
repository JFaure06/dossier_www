<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 13/02/19
 * Time: 09:07
 */
try {
    $bdd = new PDO('mysql:host=localhost;dbname=Boutique;charset=utf8', 'julien', 'Juju26500');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo 'echec lors de la connexion : ' . $e->getMessage();
}

/*
$reponse = $bdd->query('select * from Article');

while ($donnees = $reponse->fetch()){
 echo $donnees['Nom'] . ' coute ' . $donnees['Prix'] . ' $' . '<br />';
}

$reponse->closeCursor();
*/
$reponse = $bdd->query('select * from Article where idArticle in (1,4)');

while ($donnees = $reponse->fetch()) {
    echo $donnees['Nom'] . ' coute ' . $donnees['Prix'] . ' $' . '<br />';
}
$reponse->closeCursor();
?>