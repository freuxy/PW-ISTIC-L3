<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOAdmin.class.php';

session_start();
if (!empty($_SESSION['admin'])) {
    $adminDAO = new DAOAdmin();
    $admins = $adminDAO->allAdmins();
    echo '<ul>';
    foreach ($admins as $admin) {
        echo '<li style="list-style: none" id=admin'. $admin->id .'>'
            . $admin->username . '<span style="margin-left: 50px;"></span>' .
            '<INPUT type="BUTTON" value="Supprimer" onclick="supprimerAdmin(this.id)" id='. $admin->id .' />' .
            '</li>';
    }
    echo '</ul>';
}else{
    echo "<p>Il faut se connecter pour consulter des admins</p>";
}
?>
