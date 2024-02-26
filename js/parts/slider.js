import $ from 'jquery';
import 'slick-carousel';

function basicSliders() {
    $('.js-slider').each(function () {
        let slider = $(this);

        slider.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            infinite: true,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 7000,
            pauseOnHover: true,
            touchThreshold: 10,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1
                    }
                },
            ]
        });

        slider.on('init', function () {
            $(window).trigger('heightChanges');
        });
    });
}

function mutliplySlider() {
    $('.js-multiply-slider').each(function () {
        let slider = $(this);

        slider.on('init', function () {
            $(window).trigger('heightChanges');
        });

        slider.slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false,
            dots: true,
            infinite: true,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: true,
            touchThreshold: 10,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });

        slider.on('setPosition', function () {
            $(this).find('.slider-item').height('auto');
            var slickTrack = $(this).find('.slick-track');
            var slickTrackHeight = $(slickTrack).height();
            $(this).find('.slider-item').css('height', slickTrackHeight + 'px');
        });
    });
}

function textFastSlider() {
    $('.js-text-fast-slider').each(function () {
        let slider = $(this);

        slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            swipe: false,
            infinite: true,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 4000,
            pauseOnHover: false,
        });

        slider.on('init', function () {
            $(window).trigger('heightChanges');
        });
    });
}

export {basicSliders, mutliplySlider, textFastSlider};