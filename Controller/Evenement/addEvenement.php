<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOEvenement.class.php';
// Appeler le Dao pour créer l'évenement

$evenementDao = new DAOEvenement();

$res = $evenementDao -> addEvenement($_POST['titre'], $_POST['dateDebutEvenement'],$_POST['dateFinEvenement'],
    $_POST['ville'],$_FILES['posteur'],$_POST['contenu'],$_POST['contact']);
echo $res;
