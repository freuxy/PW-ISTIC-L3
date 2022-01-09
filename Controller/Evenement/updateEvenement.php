<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOEvenement.class.php';


//recevoir le corps de requete et decoder en json
$body = file_get_contents('php://input');
$json = json_decode($body);
$idEvenement = $json->{'id'};
$newTitre = $json->{'titre'};
$newdateDebutEvenement = $json->{'dateDebutEvenement'};
$newdateFinEvenement = $json->{'dateFinEvenement'};
$newVille = $json->{'ville'};
$newContenue = $json->{'contenu'};
$newContact = $json->{'contact'};

// Appeler le Dao pour mis à jour des infos de  l'événement
$evenementDao = new DAOEvenement();
$res = $evenementDao->updteEvenement($idEvenement,$newTitre,$newdateDebutEvenement,
    $newdateFinEvenement,$newVille,$newContenue,$newContact);
echo $res;
