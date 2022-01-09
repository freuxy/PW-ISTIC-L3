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
    <script type="text/javascript" src="../../js/custom/gallery.js"></script>
    <script>
        function chkinput(form){
            if(form.titre.value==""){
                alert("Veuillez entrer le titre!");
                return(false);
            }

            return(true);
        }
        window.onload = function() {
            allPhotos();
        }
    </script>

</head>
<body>

<h1>List des photos</h1>
<div id="lareponse"></div>
<div id="gallery" class="container">
    <div>
        <div id="listeGallery"></div>
    </div>

</div>
</body>
</html>