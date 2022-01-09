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