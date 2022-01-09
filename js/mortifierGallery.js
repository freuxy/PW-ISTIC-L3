function supprimerPhoto(id){
    var req = null;
    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        try {
            req = new ActiveXObject("Msxml2.XML-HTTP");
        } catch (e)
        {
            try {
                req = new ActiveXObject("Microsoft.XML-HTTP");
            } catch (e) {}
        }
    }
    req.onreadystatechange = function() {
        if(req.readyState == 4) {
            if(req.status == 200) {
                document.getElementById('lareponse').innerHTML="réssuir de supprimer";
                document.getElementById("affichePhotoMode"+id).remove();
            } else {
                document.getElementById('lareponse').value="Error: returned status code " + req.status + " " + req.statusText;
            }
        }
    };
    req.open("DELETE", "../../Controller/Gallery/delPhoto.php?idGallery="+id, true);
    req.send(null);
}



function mortifierGallery(id){
    document.getElementById("mortifierPhotoMode" + id).style.display = "block";
    document.getElementById("affichePhotoMode" + id).style.display = "none";
}
function sauvegarderModificationGallery(id){
    var req = null;
    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        try {
            req = new ActiveXObject("Msxml2.XML-HTTP");
        } catch (e)
        {
            try {
                req = new ActiveXObject("Microsoft.XML-HTTP");
            } catch (e) {}
        }
    }
    var obj= {
        id:id,
        titrePhoto:document.getElementById("titrePhoto" + id).value,

    };

    req.open("POST", "../../Controller/Gallery/updateGallery.php", true);
    req.send(JSON.stringify(obj));
    req.onreadystatechange = function() {
        console.log(req.responseText);
        if (req.readyState == 4) {
            if (req.status == 200) {

                document.getElementById("mortifierPhotoMode" + id).style.display = "none";
                document.getElementById("affichePhotoMode" + id).style.display = "block";
                // Mis à jour les infos de l'artiste modifié sur IHM
                document.getElementById("affichageTitrePhoto" + id).innerHTML = obj['titrePhoto'];

            } else {
                if(req.status == 401) {
                    alert("Sans habilitation pour modifier");
                } else {
                    alert("Erreur technique");
                }
            }
        }
    }
}