<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="../../js/custom/admins.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        //
        window.onload = function() {
            allAdmins();
        }
    </script>

</head>
<body class="p-8" > 

<h1 class="md:font-bold mb-8">Liste des admins</h1>
<div id="lareponse"></div>
<div id="admins" class="container">
    <div>
        <div class="col mb-8" id="listeAdmins"></div>
    </div>
</div>

</body>
</html>
