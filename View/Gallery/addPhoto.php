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
    <script type="text/javascript" src="../../js/custom/utils.js"></script>
    <script src="../../js/custom/gallery.js"></script>

</head>
<body>
<form action="" method="POST">
    <button type="button" onclick="afficheAddPhotoForm()">ajouter une photo</button>
</form>
<div id="addPhotoForm" style="display:none">
    <form action="../../Controller/Gallery/addPhoto.php" method="POST" enctype ="multipart/form-data">
        <fieldset>
            Titre de Photo : <input name="titrePhoto" type="text" value="" />* <br />
            <div class="content-img">
                <div class="file">
                    <i class="ico-plus"></i>télécharger la photo, support la format : jpg/png
                    <input type="file" name="photo" accept="image/*" id="upload" >
                </div>
            </div>

            <div id="lien"></div>
            <br />

            <button type="submit" name="ok" value="1">Ajouter une photo</button>
        </fieldset>
    </form>
</div>