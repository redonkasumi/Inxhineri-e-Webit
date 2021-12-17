
var stop = true;
// Thumbnail image controls
function currentSlide(n) {
    showSlides((slideIndex = n));
    stop = false;
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    try {
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    catch (e) {
        console.log("Error, first time rendered the value is undefined!")
    }
}

var slideIndex = 0;
slideShow();
function slideShow() {
    if (this.stop) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) { slideIndex = 1 }
        try {
            x[slideIndex - 1].style.display = "block";
            if (x[slideIndex - 1] == "") throw "is Empty";
            if (isNaN(x[slideIndex - 1])) throw "not a number";
            if (x[slideIndex - 1] == "null") throw "is Null";
            if (x[slideIndex - 1] == undefined) throw "undefined";
        }
        catch (e) {
            console.warn("Error thrown:\n" + e + " !")
        }

        setTimeout(slideShow, 3000);
    }// Change image every 2 seconds
    else {
    }
}
