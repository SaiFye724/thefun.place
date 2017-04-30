/* Function to open/close side menu */
$(document).ready( function() {
    var menuVisible = false,
        $rightMenu     = $('#right-menu');
        
    $('#hamburger-menu').on('click', function() {
        // menu is being shown
        $rightMenu.animate({ right: '0'}).css('display', 'block'); // animates menu in
        menuVisible = true;
    });
    $('#close-side-menu').on('click', function() {
        // menu is now being hidden
        $rightMenu.animate({ right: '-275px'}).css('display', 'none');
        menuVisible = false;  
    })
});

/* Function to close the alert on booking an event */
$(document).ready( function() {
    var $bookalert = $('.book-alert');
    $('#close-bookalert').on('click', function() {
        $bookalert.fadeOut();
    })
});

/* Function to open booking alert from button on mobile */
$(document).ready( function() {
    var $bookModal = $('#bookingModal');
    $('.mob-bookparty-btn').on('click', function() {
        $bookModal.modal("show");
    })
});

/* Function to change navigation from absolute to fixed */
$(document).ready( function() {
    var navTop = $('.navbar-top').offset().top;

    $(window).scroll(function() {
        if ($(this).scrollTop() >= navTop) {
            $('.navbar-top').css('position', 'fixed');
            $('.navbar-top').css('top', '0');
        } else {
            $('.navbar-top').css('position', 'absolute');
            $('.navbar-top').css('top', navTop);
        }
    });
});