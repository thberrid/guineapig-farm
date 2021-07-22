function isOver(){
    var request = new XMLHttpRequest();
    request.open("POST", "ctr/is_over.php");
    request.send(null);
    request.addEventListener('readystatechange', function(){
        if (logRequest.readyState === XMLHttpRequest.DONE
        &&  logRequest.status == 200){
            
        }
        setTimeout(function(){
            isOver();
        }, 500);
    })
}

document.addEventListener("DOMContentLoaded", function(){
    isOver();
}