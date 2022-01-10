<?php
require_once '../../utils/common.php';
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">
        .afficherMode input{
            display: none;
        }

        .itemArtiste {
            margin-right: 20px;
        }

    </style>
    <script src="mortifierArtiste.js"></script>
    <script type="text/javascript" src="../../js/custom/utils.js"></script>
    <script type="text/javascript" src="../../js/custom/artistes.js"></script>
    <script>
        window.onload = function() {
            allArtistes();
        }
    </script>
</head>
<body class="p-8">

<h1 class="md:font-bold mb-8" >Liste des artistes</h1>
<div id="lareponse"></div>
<div id="artistes" class="container">
    <div>
        <div id="listeArtistes"></div>
    </div>
</div>
</body>
</html>
