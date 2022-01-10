<?php
require_once '../../utils/common.php';

session_start();
noMagicQuotes();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8">
<h1 class="md:font-bold mb-8">Ajouter un administrateur</h1> 
<div id="addAdminForm">
    <form action="../../Controller/Admin/addAdmin.php" onsubmit="return chkinput(this)" method="POST">

        <!-- username : <input name="username" type="text" value="" /> <br /><br />
        mot de passe : <input name="mdp" type="text" value="" /> <br /> <br /> -->

        <div class="col-span-6 sm:col-span-3 md:font-bold mb-8">
                  <label for="username" class="block text-sm font-medium text-gray-700">Nom d'utilisateur</label>
                  <input type="text" name="username" id="username" autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md">
        </div>

        <div class="col-span-6 sm:col-span-3 w-full">
                  <label for="mdp" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                  <input type="password" name="mdp" id="password" autocomplete="family-name" class="mt-1 focus:ring-[#E4DE4B] focus:border-[#E4DE4B] block w-full p-3 shadow-sm sm:text-sm border border-gray-300 rounded-md">
        </div>

        <button type="submit" name="ok" value="1" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#2D2E35] hover:bg-[#E4DE4B] hover:text-[#2D2E35] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2D2E35] mt-8">
        Créer un Admin
        </button>
        
        <br /> <br />
    </form>

</div>
</body>
</html>

