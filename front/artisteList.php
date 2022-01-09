<?php
require_once '../utils/common.php';


session_start();
noMagicQuotes();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ANOMIC ELEMENTS</title>

    <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link href="../css/artistesFront.css" rel="stylesheet" type="text/css" />


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
            <h1><a href="../index.html"><img src="../images/logo.jpg" alt="logo" width="180" height="60" /><span>ANOMIC ELEMENTS</span></a></h1>
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

<div id="lareponse"></div>
<h2 class="artisteContainer">Tous les artistes</h2>
<div id="artistes" class="artisteContainer">

                <?php
                    $db = initDatabase();
                    $Artistes = $db->query("SELECT * FROM Artiste")->fetchAll(PDO::FETCH_OBJ);
                    foreach ($Artistes as $Artiste) {
                        echo "<div id=modeAffichageArtiste". $Artiste->id .">";
                        echo "<a href=detailArtiste.php?id=". $Artiste->id ."><img width='100px' class='itemArtiste' src='../uploads/" . $Artiste->profile_artiste . "'/></a>";
                        echo "<br/>";
                        echo "<span class='itemArtiste'>nom:<span id=affichageNomArtiste". $Artiste->id . ">". $Artiste->nom . "</span></span>";
                        echo "<br/>";
                        echo "<span class='itemArtiste'>type:<span id=affichageTypeArtiste". $Artiste->id . ">". $Artiste->type_artiste . "</span></span>";
                        echo "<br/>";
                       // echo "<span class='itemArtiste'>intro:<span id=affichageIntroArtiste". $Artiste->id . ">". $Artiste->intro . "</span></span>";
                        //echo "<br/>";
                        //echo "<span class='itemArtiste'>tel:<span id=affichageContactArtiste". $Artiste->id . ">". $Artiste->contact . "</span></span>";
                        $url = $Artiste->contact;
                        echo "<a href='$url'><img src='../images/facebook.png' /></a>";
                        echo "<a href=detailArtiste.php?id=". $Artiste->id .">voir detail>></a>";
                        echo "</div>";
                    }


                ?>
</div>

</body>
</html>