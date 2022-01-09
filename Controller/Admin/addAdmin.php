<?php

require_once '../../utils/common.php';
require '../../DAO/DAOAdmin.class.php';
session_start();
noMagicQuotes();
// Appeler le Dao pour créer l'admin
$adminDao = new DAOAdmin();
$res = $adminDao -> addAdmin($_POST['username'], $_POST['mdp']);
echo $res;

