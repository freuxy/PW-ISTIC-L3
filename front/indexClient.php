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
    <style>
        #content{
            width: 800px;
            margin:0 auto;
        }
        #listArtisteIndex{
            width: 800px;
            margin:0 auto;
            display: grid;
            grid-template-columns: repeat(3, 33.33%);
        }

    </style>
</head>
<body>
<div class='miaov_head'>
    <iframe MARGINWIDTH=0 MARGINHEIGHT=0 HSPACE=0 VSPACE=0 FRAMEBORDER=0 SCROLLING=no src="header.html" width="100%"  height="auto">
    </iframe>
</div>

<div id="templatemo_menu_wrapper">
	<div id="templatemo_menu">
        <ul>
            <li><a href="indexClient.php" class="current">accueil</a></li>
            <li><a href="evenementList.php">Evénement</a></li>
            <li><a href="artisteList.php">Artistes</a></li>
            <li><a href="gallery.php">gallery</a></li>
            <li><a href="https://www.facebook.com/anomicelements/?ref=page_internal">Contact</a></li>
        </ul>
    </div> <!-- end of templatemo_menu -->
</div>
<div id="content">
<?php
require_once '../utils/common.php';
session_start();
noMagicQuotes();

$db = initDatabase();
$Evenements = $db->query("SELECT * FROM evenement")->fetchAll(PDO::FETCH_OBJ);
echo "<div id=listEvenementIndex>";
foreach ($Evenements as $Evenement) {
    echo "<div id='eventsContaineur' style='margin-bottom: 30px'>";
    echo "<div class=eventsIndex id=modeAffichageEvent". $Evenement->id .">";
    echo "<a href=detailEvenement.php?id=". $Evenement->id ."><img  width='600px' class='itemEventment' src='../uploads/" . $Evenement->posteur . "'/></a>";
    echo "<br/>";
    echo "<span class='itemEventment'>Titre: <span id=affichageTitreEvent". $Evenement->id . ">". $Evenement->titre . "</span>";
    echo "<br/>";
    echo "<span class='itemEventment'> ville:<span id=affichageVilleEvent". $Evenement->id . ">". $Evenement->ville . "</span>";
    echo "<br/>";
    echo "<a href=front/detailEvenement.php?id=". $Evenement->id .">voir detail>></a>";
    echo "<br/>";
    echo "</div>";
}
echo "</div>";
$Artistes = $db->query("SELECT * FROM Artiste")->fetchAll(PDO::FETCH_OBJ);
echo "<h2>Tous les artistes</h2>";
echo "<div id=listArtisteIndex>";

foreach ($Artistes as $Artiste) {
    echo "<div id='artisteIndex'>";
    echo "<div id=modeAffichageArtiste". $Artiste->id .">";
    echo "<a href=detailArtiste.php?id=". $Artiste->id ."><img width='180px' class='itemArtiste' src='../uploads/" . $Artiste->profile_artiste . "'/></a>";
    echo "<br/>";
    echo "<span class='itemArtiste'>nom:<span id=affichageNomArtiste". $Artiste->id . ">". $Artiste->nom . "</span></span>";
    echo "<br/>";
    echo "<span class='itemArtiste'>type:<span id=affichageTypeArtiste". $Artiste->id . ">". $Artiste->type_artiste . "</span></span>";
    echo "<br/>";
    $url = $Artiste->contact;
    echo "<a href='$url'><img src='../images/facebook.png' /></a>";
    echo "<a href=front/detailArtiste.php?id=". $Artiste->id .">voir detail>></a>";
    echo "</div>";
    echo "</div>";
}
echo "</div>";
?>
</div>
<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">

        Copyright © 2048 <a href="#">Anomic Elements</a> -
        Template from <a href="https://www.facebook.com/anomicelements/photos/?ref=page_internal" target="_parent"></a>

    </div>
</div>
</body>
</html>
