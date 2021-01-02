$(function () {
    $('#js-hamburger').click(function () {
        $('body').toggleClass('is-drawerActive')

        if ($(this).attr('aria-expanded') == 'false') {
            $(this).attr('aria-expanded', 'true')
            $('#js-global-menu').attr('area-hidden', 'false')
        } else {
            $(this).attr('aria-expanded', 'false')
            $('#js-global-menu').attr('area-hidden', 'true')
        }
    })
    $('#js-drawer-background').click(function () {
        $('body').removeClass('is-drawerActive')
        $('#js-hamburger').attr('aria-expanded', 'false')
        $('#js-global-menu').attr('area-hidden', 'true')
    })
});

jQuery(function ($) {
    $('.zoom_slider').bxSlider({
        auto: true,
        pager: false,
        controls: false,
        mode: 'fade',
        speed: 1000,
        pause: 4000,
    });
});