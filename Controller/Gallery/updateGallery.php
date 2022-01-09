<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOGallery.class.php';

//recevoir le corps de requete et decoder en json
$body = file_get_contents('php://input');
$json = json_decode($body );
$idGallery = $json->{'id'};
$newTitrePhoto = $json->{'titrePhoto'};

// Appeler le Dao pour mis à jour des infos des photo
$galleryDao = new DAOGallery();
$res = $galleryDao->updatePhoto($idGallery,$newTitrePhoto);
echo $res;

/*
