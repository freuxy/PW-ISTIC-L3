<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ANOMIC ELEMENTS</title>

    <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />

    <script src="../js/lib/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="../js/lib/jquery.slideViewerPro.1.0.js" type="text/javascript"></script>

    <!-- Optional plugins  -->
    <script src="../js/lib/jquery.timers.js" type="text/javascript"></script>
    <script src="../js/custom/galleryFront.js" type="text/javascript"></script>
    <link href="../css/galleryCss.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="templatemo_top_wrapper">
    <div id="templatemo_top">
        <ul id="social_box">
            <li><a href="https://www.facebook.com/anomicelements/?ref=page_internal"><img src="../images/facebook.png" alt="facebook" /></a></li>
            <li><a href="https://www.facebook.com/anomicelements/?ref=page_internal"><img src="../images/twitter.png" alt="twitter" /></a></li>



        </ul>

    </div>
</div>

<div id="templatemo_header_wrapper">
    <div id="templatemo_header">

        <div id="site_title">
            <h1><img src="../images/logo.jpg" alt="logo" width="180" height="60" /></h1>
        </div> <!-- end of site_title -->

    </div>
</div> <!-- end of templatemo_header -->

<div id="templatemo_menu_wrapper">
    <div id="templatemo_menu">
        <ul>
            <li><a href='indexClient.php'>accueil</a></li>
            <li><a href="evenementList.php">Evénement</a></li>
            <li><a href="artisteList.php">Artistes</a></li>
            <li><a href="gallery.php">gallery</a></li>
            <li><a href="https://www.facebook.com/anomicelements/?ref=page_internal">Contact</a></li>
        </ul>
    </div> <!-- end of templatemo_menu -->
</div>



<?php
require_once '../utils/common.php';


session_start();
noMagicQuotes();

$db = initDatabase();
$Gallerys = $db->query("SELECT * FROM Gallery")->fetchAll(PDO::FETCH_OBJ);
// il faut seulement connecter afin de consulter tous les admins


    echo "<div id='photosContent'>";

    foreach ($Gallerys as $Gallery) {
        echo "<div class=affichePhotoMode id=affichePhotoMode" . $Gallery->id . ">";
        echo "<br/>";
        echo "<img width='260px' id=affichagePhoto" . $Gallery->id . "class='itemGallery' src='../uploads/" . $Gallery->photo . "'/>";
        echo "<br/>";


        echo "</div>";

    }
    echo "</div>";
?>
</body>
</html>

