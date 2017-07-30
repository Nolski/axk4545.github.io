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

