<?php

require_once '../../utils/common.php';
require_once '../../DAO/DAOGallery.class.php';
// Appeler le Dao pour supprimer la photo
$galleryDao = new DAOGallery();
$idGallery = $_GET["idGallery"];
$res = $galleryDao -> deletePhoto($idGallery);
echo $res;



