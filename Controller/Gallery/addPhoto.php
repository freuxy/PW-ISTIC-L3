<?php

require_once '../../utils/common.php';
require_once '../../DAO/DAOGallery.class.php';
// Appeler le Dao pour ajouter une photo
$galleryDao = new DAOGallery();
$res = $galleryDao -> addPhoto($_POST['titrePhoto'],$_FILES['photo']);
echo $res;
