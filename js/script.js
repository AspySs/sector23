window.onload = function() {
var slide = document.body.querySelectorAll(".otz");
var i =0;

function next() {
        slide[i].style.display = "none";
        i += 1;
        slide[i].style.display = "inline-block";
    }

    function prev() {
        slide[i].style.display = "none";
        i += 1;
        slide[i].style.display = "inline-block";
    }
}