function getlog(){
    var logScreen = document.getElementById("logdisplay");
    var logRequest = new XMLHttpRequest();
    logRequest.open('GET', '/ctr/get_log.php');
    logRequest.send(null);
	logRequest.addEventListener('readystatechange', function(){
        if (logRequest.readyState === XMLHttpRequest.DONE
        &&  logRequest.status == 200){
            if (logRequest.responseText != "no log file"){
                logScreen.innerHTML = logRequest.responseText;
            } else {
                logScreen.innerHTML = logScreen.innerHTML + "<br><br>logs: over.";
            }
        }
    });
}