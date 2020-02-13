
$( '.dropdown-menu .dropdown-toggle' ).on('click', function() {
    
    var $el = $(this);
    var $parent = $el.offsetParent(".dropdown-menu");
    
    if (!$el.next().hasClass("show")) {
        $el.parents('.dropdown-menu').first().find(".show").removeClass("show");
    }
    $el.next(".dropdown-menu").toggleClass("show").parent("li").toggleClass("show");
    
    $el.parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", function () {
        $(".dropdown-menu .show").removeClass("show");
    });
    
    if (!$parent.parent().hasClass("navbar-nav")) {
        $el.next().css({"top":$el[0].offsetTop,"left":$parent.outerWidth()});
    }
    
    return false;
});




// Sticky navbar
// =========================
$(document).ready(function () {
    // Custom function which toggles between sticky class (is-sticky)
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        }
        else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        // On page load
        stickyToggle(sticky, stickyWrapper, $(window));
    });
});