<?php

require_once '../../utils/common.php';
require '../../DAO/DAOAdmin.class.php';

// Appeler le Dao pour supprimer l'admin
$adminDao = new DAOAdmin();
$idAdmin = $_GET["idAdmin"];
$res = $adminDao -> deleteAdmin($idAdmin);
echo $res;

