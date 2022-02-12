require('./bootstrap');

$(document).ready(() => {

    // modal script
    const modal = $('.m-modal');

    $('a[href="#modal"]').click(() => {
        modal.addClass('m-modal_visible');
    });

    $('a[href="#modal-close"]').click(() => {
        modal.removeClass('m-modal_visible');
    });

    // gallery script
    $('#gallery').owlCarousel({
        center:true,
        loop:true,
        margin:50,
        dots: false,
        nav: true,
        navText: [
            '<i class="las la-angle-left"></i>',
            '<i class="las la-angle-right"></i>'
        ]
    });

    // colors script
    $colorsImage = $('.colors__img');

    $('.colors__list a').click(function(e) {
        e.preventDefault();

        $('.colors__item_active').removeClass('colors__item_active');
        $(this).addClass('colors__item_active');
        const bg = $(this).attr('data-link');

        $colorsImage.attr('src', '/images/colors/' + bg);
    });

    //reviews script
    $('.reviews__list').owlCarousel({
        center:true,
        loop:true,
        items: 5,
        margin:50,
        dots: false,
        nav: true,
        navText: [
            '<i class="las la-angle-left"></i>',
            '<i class="las la-angle-right"></i>'
        ]
    });
});
