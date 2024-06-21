const oStickyTopOnScrollDown = (function(){

var header = document.getElementsByClassName("crud-container")[0];
//var content = document.getElementsByClassName("sticky-scroll-content")[0];
var sticky = header.offsetTop;

window.onscroll = function() { initPlugin(); };

function initPlugin() {

    runPlugin();

} //end method


function runPlugin() {
    
    
    if (window.pageYOffset > sticky) {
        
        header.classList.add('sticky-scroll');
        header.style.zIndex = header.style.zIndex+1;


    } else {

        header.classList.remove("sticky-scroll");
        header.removeAttribute('style');

    }

} //end method

return { init: initPlugin }

})();
