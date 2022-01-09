<?php

require_once '../../utils/common.php';
require_once '../../DAO/DAOEvenement.class.php';
// Appeler le Dao pour supprimer l'événement
$evenementDao = new DAOEvenement();
$idEvenement = $_GET["idEvenement"];
$res = $evenementDao -> deleteEvenement($idEvenement);
echo $res;
