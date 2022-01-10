<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOAdmin.class.php';

session_start();
if (!empty($_SESSION['admin'])) {
    $adminDAO = new DAOAdmin();
    $admins = $adminDAO->allAdmins();
    echo '<ul>';
    foreach ($admins as $admin) {
        echo '<li style="list-style: none" class="mb-3 " id=admin'. $admin->id .'>'.
        '<span class="w-96">'. $admin->username . '</span>' . '<span style="margin-left: 50px;"></span>' .
            '<INPUT class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35]" type="BUTTON" value="Supprimer" onclick="supprimerAdmin(this.id)" id='. $admin->id .' />' .
            '</li>';
    }
    echo '</ul>';
}else{
    echo "<p>Il faut se connecter pour consulter des admins</p>";
}
?>
