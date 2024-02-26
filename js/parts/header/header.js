import $ from 'jquery';

function header() {
    $('.header__toggle, .header__close').on('click', function () {
        $('body').toggleClass('header--active');

        if($('body').hasClass('header--active')) {
            $('body, html').addClass('overflow-hidden');
        } else {
            $('body, html').removeClass('overflow-hidden');
        }
    });

    $('.menu-item__parent a').on('click', function (e) {
        e.preventDefault();

        const parentMenuItem = $(this).closest('.menu-item');
        const subMenu = parentMenuItem.find('.sub-menu');

        parentMenuItem.toggleClass('menu-open');

        if (parentMenuItem.hasClass('menu-open')) {
            subMenu.css('height', subMenu[0].scrollHeight + 'px');
        } else {
            subMenu.css('height', 0);
        }
    });

    $('.btn-search').on('click', function () {
        $('.header__search-form').addClass('active');
        $('.header__search-form').removeClass('unactive');
    });

    $('.close--search').on('click', function () {
        $('.header__search-form').removeClass('active');
        $('.header__search-form').addClass('unactive');
    });

    $(document).keyup(function(e) {
        if (e.key === "Escape") { // escape key maps to keycode `27`
            $('.header__search-form').removeClass('active');
            $('.header__search-form').addClass('unactive');
        }
    });

    // autofocus to the search field when show search bar
    $('.js-search-open').on('click', function () {
        $('.ajaxSearch .is-search-input').trigger('focus');
    })


    // add a transform the same width as the element
    $(document).on('mouseenter', '.fixed-button' , function () {
        $(this).css('translateX', $(this).width + 'px')
    })

    $(document).on('mouseleave', '.fixed-button' , function () {
        $(this).css('translateX', 'calc(100% - 2rem - 20px)')
    })
}

function stikyHeader() {
    const header = $('body');

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 30) {
            header.addClass('header-fixed');
        } else if ($(window).scrollTop() < 30 && header.hasClass('header-fixed')) {
            header.removeClass('header-fixed');
        }
    })
}

export {header, stikyHeader};