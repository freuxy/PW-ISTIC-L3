<?php

require_once '../../utils/common.php';
require_once '../../DAO/DAOArtiste.class.php';
// Appeler le Dao pour supprimer l'artiste
$artisteDao = new DAOArtiste();
$idArtiste = $_GET["idArtiste"];
// il faut d'abord supprimer des oeuvre car la contrainte de clé d'étrangère
$res = $artisteDao -> deleteOeuvre($idArtiste);
echo $res;
