function allArtistes() {
    let req = openReqAjax();
    req.onreadystatechange = function() {
        if(req.readyState == 4) {
            if(req.status == 200) {
                document.getElementById("listeArtistes").innerHTML = req.responseText;
            } else {
                document.getElementById('lareponse').value="Error: returned status code " + req.status + " " + req.statusText;
            }
        }
    };
    req.open("GET", "../../Controller/Artiste/controllerArtisteList.php", true);
    req.send(null);
}
