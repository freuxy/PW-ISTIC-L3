<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOArtiste.class.php';
// Appeler le Dao pour créer l'artiste
$artisteDao = new DAOArtiste();
$oeuvres = $_POST['lien_oeuvre'];
$res = $artisteDao -> addArtiste($_POST['nom'], $_POST['type_artiste'],$_POST['intro'], $_POST['contact'],$_FILES['profile_artiste'],$oeuvres);
echo $res;
