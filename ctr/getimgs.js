var listIndex = 0;

function addElements(elements){
    if (!elements.length)
        return ;
    var imgLi = document.getElementById("img-list");
    elements.forEach(function(element){
        var nA = document.createElement("a");
        nA.href = element.href;
        nA.target = "_blank";
        nA.innerHTML = element.name + " (" + element.time + ")";
        var nLi = document.createElement("li");
        nLi.appendChild(nA);
        imgLi.appendChild(nLi);
        listIndex += 1;
    })
}

function getimgs(){
    var imgReq = new XMLHttpRequest();
    imgReq.open('GET', '/ctr/get_imgs.php?index=' + listIndex);
    imgReq.send(null);
	imgReq.addEventListener('readystatechange', function(){
        if (imgReq.readyState === XMLHttpRequest.DONE
        &&  imgReq.status == 200){
            addElements(JSON.parse(imgReq.responseText));
        }
    });
}