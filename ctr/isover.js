var loadingText = [
    "création du zip en cours",
    "création du zip en cours.",
    "création du zip en cours..",
    "création du zip en cours...",
];

var timer = 0;

function waitingAnimation(){
    var link = document.getElementById("dl-link");
    link.innerHTML = loadingText[0];
    loadingText.push(loadingText.shift());
    timer = setTimeout(function(){
        waitingAnimation();
    }, 250);
}

function getDLLink(){
    var dlRequest = new XMLHttpRequest();
    dlRequest.open("GET", "/ctr/get_dl_link.php");
    dlRequest.send(null);
    dlRequest.addEventListener('readystatechange', function(){
        if (dlRequest.readyState === XMLHttpRequest.DONE
        &&  dlRequest.status == 200){
            clearTimeout(timer);
            timer = 0;
            var reloadInfo = document.getElementById("reload-info");
            reloadInfo.classList.remove("hidden");
            var response = JSON.parse(dlRequest.responseText);
            var link = document.getElementById("dl-link");
            link.href = response.href;
            link.innerHTML = response.filename;
        }
    })
}

function isOver(stopAll){
    var request = new XMLHttpRequest();
    request.open("GET", "/ctr/is_over.php");
    request.send(null);
    request.addEventListener('readystatechange', function(){
        if (request.readyState === XMLHttpRequest.DONE
        &&  request.status == 200){
            var response = JSON.parse(request.responseText)
            if (response == 0){
                var dlSection = document.getElementById("dl-section");
                dlSection.classList.remove("hidden");
                waitingAnimation();
                getDLLink();
                stopAll();
            }
            return (false);
        }
    })
}