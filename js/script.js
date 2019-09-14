let currentMenuState = 0;
const toggleNav = function(){
    const menuElement = document.getElementById("menu");
    if (currentMenuState === 0) {
        menuElement.classList.remove("d-none");
        menuElement.classList.add("d-flex");
        console.log("Menu opened");
        currentMenuState = 1;
    } else {
        menuElement.classList.remove("d-flex");
        menuElement.classList.add("d-none");
        console.log("Menu closed");
        currentMenuState = 0;
    }
};


jQuery.fn.clickOutside = function(callback){
    var $me = this;
    $(document).mouseup(function(e) {
        if ( !$me.is(e.target) && $me.has(e.target).length === 0 ) {
            callback.apply($me);
        }
    });
};

var $categoryMenu = $('#photography-categories-menu');
var $categoryMenuMobile = $("#photography-categories-mobile-menu");
var $galleryMenu = $("#photography-galleries-menu");
var $galleryMenuMobile = $("#photography-galleries-mobile-menu");

const toggleCategory = function() {
    if($categoryMenu.hasClass("d-flex") || $categoryMenuMobile.hasClass("d-flex")){
        $categoryMenu.removeClass("d-flex").addClass("d-none");
        $categoryMenuMobile.removeClass("d-flex").addClass("d-none");
    } else {
        $categoryMenu.removeClass("d-none").addClass("d-flex");
        $categoryMenuMobile.removeClass("d-none").addClass("d-flex");
    }
    $galleryMenu.removeClass("d-flex").addClass("d-none");
    $galleryMenuMobile.removeClass("d-flex").addClass("d-none");
};

const toggleGallery = function() {
    $categoryMenu.removeClass("d-flex").addClass("d-none");
    $categoryMenuMobile.removeClass("d-flex").addClass("d-none");
    if($galleryMenu.hasClass("d-flex") || $galleryMenuMobile.hasClass("d-flex")){
        $galleryMenu.removeClass("d-flex").addClass("d-none");
        $galleryMenuMobile.removeClass("d-flex").addClass("d-none");
    } else {
        $galleryMenu.removeClass("d-none").addClass("d-flex");
        $galleryMenuMobile.removeClass("d-none").addClass("d-flex");
    }
};

const closeAllMenu = function(){
    $categoryMenu.removeClass("d-flex").addClass("d-none");
    $categoryMenuMobile.removeClass("d-flex").addClass("d-none");
    $galleryMenu.removeClass("d-flex").addClass("d-none");
    $galleryMenuMobile.removeClass("d-flex").addClass("d-none");
};

$('#photography-galleries, #photography-categories').clickOutside(function(){
    closeAllMenu();
});

$('.videography-carousel-overlay').on("click", function () {
    $('.videography-carousel-overlay').removeClass("active");
    let $this = $(this);
    $this.addClass("active");
});

$(document).ready( e => {
    $("#experience-text-block").height($("#experience-img").height())
});
$(window).on("resize",function () {
    $("#experience-text-block").height($("#experience-img").height());
});

$("#scroll-down").on("click", function () {
    var target = $("#blog-post-content");
    var targetOffset = $(target).offset().top + ($(target).height() / 2);
    console.log(targetOffset);
    $('html,body').animate(
        {
            scrollTop: targetOffset
        },200,function()
        {
            location.hash = target;
        });
});

//Scrolls down to services while clicking the Call to Action Button
$(document).ready(function (){
    $("#call-to-action").click(function (){
        $('html, body').animate({
            scrollTop: $(".services").offset().top
        }, 500);
    });
    $("#photography-categories-menu li a").click(function () {
        closeAllMenu()
        toggleGallery()
    });
    $("#photography-galleries-menu li a").click(function () {
        closeAllMenu()
    });
    var sliders = parseInt($("#photography-slider.d-none .photography-slider-overlay").length)
    var i = 0
    $('#photography-carousel, #photography-carousel-mobile').on('slide.bs.carousel', function () {
        i = i + 1
        if (i < sliders) {
            $('.photography-slider-overlay').removeClass("active")
            $('.photography-slider-overlay:eq('+i+')').addClass("active")
            $('.photography-slider-overlay:eq('+(i+sliders)+')').addClass("active")
        } else {
            i = 0
            $('.photography-slider-overlay').removeClass("active")
            $('.photography-slider-overlay:eq('+i+')').addClass("active")
            $('.photography-slider-overlay:eq('+(i+sliders)+')').addClass("active")
        }
    });

    var videoSliders = parseInt($("#videography-slider.d-none .videography-carousel-overlay").length)
    console.log(videoSliders)
    var j = 0
    $('#videography-carousel, #videography-carousel-mobile').on('slide.bs.carousel', function () {
        j = j + 1
        if (j < videoSliders) {
            $('.videography-carousel-overlay').removeClass("active")
            $('.videography-carousel-overlay:eq('+j+')').addClass("active")
            $('.videography-carousel-overlay:eq('+(j+videoSliders)+')').addClass("active")
        } else {
            j = 0
            $('.videography-carousel-overlay').removeClass("active")
            $('.videography-carousel-overlay:eq('+j+')').addClass("active")
            $('.videography-carousel-overlay:eq('+(j+videoSliders)+')').addClass("active")
        }
    });
});

//Phtography Slider Active Toggler
$('.photography-slider-overlay').on("click", function () {
    $('.photography-slider-overlay').removeClass("active");
    let $this = $(this);
    $this.addClass("active");
});