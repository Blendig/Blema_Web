/* JS PER SLIDESHOW*/
var images=['../Project/nike1.png', '../Project/nike2.png', '../Project/nike3.png', '../Project/nike4.png'];
var i=0;
function slideShow() {
    document.getElementById("image").src=images[i];
    if(i<images.length-1){
        i++;
    }
    else {
        i=0;
    }
    setTimeout("slideShow()", 2000);
}
window.onload=slideShow;

