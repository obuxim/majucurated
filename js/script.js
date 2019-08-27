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
