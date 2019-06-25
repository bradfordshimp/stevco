

document.addEventListener("DOMContentLoaded", function (event) {

    window.addEventListener("load", function (e) {

        document.body.style.display = "block";

        var tl = new TimelineMax();
        tl.staggerFrom('main, aside', 2, {
            opacity: 0,
            scale: .5,
            ease: Power2.easeOut
        }, 0.2)

        tl.staggerFrom('h1, h2', .5, {
            opacity: 0,
            y: -40,
            ease: Power2.easeInOut
        }, 0.2, "-=2")

        tl.staggerFrom('.anim-panel', 1, {
            opacity: 0,
            y: -40,
            ease: Power2.easeInOut
        }, 0.2, "-=1.5")

    }, false);


});



var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}





