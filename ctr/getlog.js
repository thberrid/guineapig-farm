function getlog(){
    var logScreen = document.getElementById("logdisplay");
    var logRequest = new XMLHttpRequest();
    logRequest.open('GET', 'ctr/get_log.php');
    logRequest.send(null);
	logRequest.addEventListener('readystatechange', function(){
        if (logRequest.readyState === XMLHttpRequest.DONE
        &&  logRequest.status == 200){
            logScreen.innerHTML = logRequest.responseText;
            setTimeout(function(){
                getlog();
            }, 500);
        }
    });
}
document.addEventListener("DOMContentLoaded", function(){
    getlog();
})