//apply css to underline current page in menu
function setCurrent(){
    var nav = document.getElementById('nav');
    var anchor = nav.getElementsByTagName('a');
    var pathlist = window.location.pathname.split('/');
    var current=pathlist[pathlist.length-1];
        for (var i = 0; i < anchor.length; i++) {
            var page=anchor[i].href.split("/")
            if(page[page.length-1] == current) {
                anchor[i].className = "current";
                }
        }
}
//open dropdown menu on click
function drop() {
    var elem = document.querySelector("#nav");
    if (elem.style.display === "none") {
        elem.style.display = "block";
    }
    else {
        elem.style.display = "none";
    }
}

