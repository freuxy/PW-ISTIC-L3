function supprimerAdmin(id){
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
                document.getElementById("admin"+id).remove();
            } else {
                document.getElementById('lareponse').value="Error: returned status code " + req.status + " " + req.statusText;
            }
        }
    };
    req.open("GET", "../../Controller/Admin/delAdmin.php?idAdmin="+id, true);
    req.send(null);
}

function allAdmins() {
    let req = openReqAjax();
    req.onreadystatechange = function() {
        if(req.readyState == 4) {
            if(req.status == 200) {
                document.getElementById("listeAdmins").innerHTML = req.responseText;
            } else {
                document.getElementById('lareponse').value="Error: returned status code " + req.status + " " + req.statusText;
            }
        }
    };
    req.open("GET", "../../Controller/Admin/controllerAdminList.php", true);
    req.send(null);
}

function openReqAjax() {
    let req = null;
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

    return req;
}