

<?php
require_once '../../utils/common.php';
require_once '../../DAO/DAOGallery.class.php';
session_start();
noMagicQuotes();
if (!empty($_SESSION['admin'])) {
    $galleryDAO = new DAOGallery();
    //appeler la methode de DAOArtistes afin de l'afficher tous les photos
    $Gallerys = $galleryDAO->allPhotos();

    if (!empty($_SESSION['admin'])) {
        echo "<div id=lareponse></div>";
        foreach ($Gallerys as $Gallery) {
            echo "<div id=affichePhotoMode" . $Gallery->id . ">";
            echo "<img width='200px' id=affichagePhoto" . $Gallery->id . "class='itemGallery' src='../../uploads/" . $Gallery->photo . "'/>";
            echo "<br/>";
            echo "<br/>";
            echo "<span class='itemGallery'>Titre:<span id=affichageTitrePhoto" . $Gallery->id . ">" . $Gallery->titrePhoto . "</span></span>";
            echo "<br/>";
            echo "<br/>";
            echo "<button style='font-size:20px;' onclick=mortifierGallery(" . $Gallery->id . ")>" . "&#9998;" . "</a>" . "</button>";
            echo "<button style='font-size:20px;' onclick=supprimerPhoto(" . $Gallery->id . ")>" . "&#10007;" . "</a>" . "</button>";
            echo "<br/>";
            echo "<br/>";

            echo "</div>";

            echo "<div id=mortifierPhotoMode" . $Gallery->id . " style='display: none'>";
            echo "<img width='200px' class='itemGallery' src='../../uploads/" . $Gallery->photo . "'/>";
            echo "<br/>";
            echo "<br/>";
            echo "<div>Titre: <input id=titrePhoto" . $Gallery->id . " value='$Gallery->titrePhoto' /></div>";
            echo "<br/>";
            echo "<button onclick=sauvegarderModificationGallery(" . $Gallery->id . ")>soumit</button>";
            echo "<br/>";
            echo "<br/>";
            echo "</div>";
        }

    }
}