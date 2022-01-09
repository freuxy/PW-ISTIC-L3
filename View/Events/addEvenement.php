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
    <script src="../../js/gestion.js"></script>
    <script src="mortifierEvent.js"></script>
    <script src="checkForm.js"></script>


</head>
<body>

<div id="addEvenementForm">
    <form action="../../Controller/Evenement/addEvenement.php" onsubmit="return chkinput(this)" method="POST" enctype ="multipart/form-data">
        <fieldset>
            titre : <input name="titre" type="text" value="" />* <br />
            dateDebutEvenement : <input name="dateDebutEvenement" type="date" value="" /> <br />
            dateFinEvenement : <input name="dateFinEvenement" type="date" value="" /> <br />
            ville : <input name="ville" type="text" value="" /> <br />
            <textarea rows="20" cols="30" name="contenu">veuillez taper des contenu</textarea> <br />
            <div class="content-img">
                <div class="file">
                    <i class="ico-plus"></i>télécharger le posteur, support la format : jpg/png
                    <input type="file" name="posteur" accept="image/*" id="upload" >
                </div>
            </div>
            contact : <input name="contact" type="tel" value="" /> <br />
            <button type="submit" name="ok" value="1">Créer une Evenement</button>
        </fieldset>
    </form>
</div>