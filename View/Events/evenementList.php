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
    <style type="text/css">
        .afficherMode input{
            display: none;
        }

        .itemEventment {
            margin-right: 20px;
        }
    </style>
    <script src="mortifierEvent.js"></script>
    <script type="text/javascript" src="../../js/custom/utils.js"></script>
    <script type="text/javascript" src="../../js/custom/evenements.js"></script>
    <script>
        function chkinput(form){
            if(form.titre.value==""){
                alert("Veuillez entrer le titre!");
                return(false);
            }

            return(true);
        }
        window.onload = function() {
            allEvenements();
        }
    </script>

</head>
<body class="p-8">

<h1 class="md:font-bold mb-8">Liste des évenements</h1>
<div id="lareponse"></div>
<div id="evenement" class="container">
    <div>
        <div id="listeEvenements"></div>
    </div>

</div>
</body>
</html>