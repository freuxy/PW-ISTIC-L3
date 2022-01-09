function allEvenements() {
    let req = openReqAjax();
    req.onreadystatechange = function() {
        if(req.readyState == 4) {
            if(req.status == 200) {
                document.getElementById("listeEvenements").innerHTML = req.responseText;
            } else {
                document.getElementById('lareponse').value="Error: returned status code " + req.status + " " + req.statusText;
            }
        }
    };
    req.open("GET", "../../Controller/Evenement/controllerEvenementList.php", true);
    req.send(null);
}
