var intervalId = 0;

function stopInterval(){
    clearInterval(intervalId);
}

function intervalLoop(){
    getlog();
    getimgs();
    isOver(stopInterval);
}

document.addEventListener("DOMContentLoaded", function(){
    intervalId = setInterval(intervalLoop, 250);
})
