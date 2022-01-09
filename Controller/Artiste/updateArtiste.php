<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOArtiste.class.php';

//recevoir le corps de requete et decoder en json
$body = file_get_contents('php://input');
$desDir = "../../uploads/";
$json = json_decode($body );
$idArtiste = $json->{'id'};
$newNom = $json->{'nom'};
$newType_artiste = $json->{'type_artiste'};
$newIntro = $json->{'intro'};
$newContact = $json->{'contact'};

// Appeler le Dao pour mis à jour des infos de  l'artiste
$artisteDao = new DAOArtiste();
$res = $artisteDao->updteArtiste($idArtiste,$newNom,$newType_artiste,$newIntro,$newContact,$artisteDao);
echo $res;
/*
$db = initDatabase();
$body = file_get_contents('php://input');
$desDir = "../../uploads/";
$json = json_decode($body );
$idArtiste = $json->{'id'};
$newNom = $json->{'nom'};
$newType_artiste = $json->{'type_artiste'};
$newIntro = $json->{'intro'};
$newContact = $json->{'contact'};



$sth = $db->prepare("UPDATE Artiste SET nom = :newNom, type_artiste = :newType_artiste
               ,intro = :newIntro, contact = :newContact
               WHERE id = :idArtiste");
$sth->bindValue(':newNom', $newNom, PDO::PARAM_STR);
$sth->bindValue(':newType_artiste', $newType_artiste, PDO::PARAM_STR);
$sth->bindValue(':newIntro', $newIntro, PDO::PARAM_STR);
$sth->bindValue(':newContact', $newContact, PDO::PARAM_STR);
$sth->bindValue(':idArtiste', $idArtiste, PDO::PARAM_INT);
print_r($json);
if($sth->execute()) {

}else{
    // Lever une exception si l'erreur
    http_response_code(403);

}

