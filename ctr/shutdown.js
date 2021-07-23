document.addEventListener("DOMContentLoaded", function(){
    var stopButton = document.getElementById("shutdown");
    stopButton.addEventListener("click", function(){
        var shutDownRequest = new XMLHttpRequest();
        shutDownRequest.open('GET', '/ctr/shutdown.php');
        shutDownRequest.send(null);
        shutDownRequest.addEventListener('readystatechange', function(){
            if (shutDownRequest.readyState === XMLHttpRequest.DONE
            &&  shutDownRequest.status == 200){
                console.log(shutDownRequest.responseText);
            }
        })
    });
})