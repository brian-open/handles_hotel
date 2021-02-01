import '../scss/main.scss';
//import { $, $$ } from "./libs/bling";
import Swiper from 'swiper';

import $ from 'jquery';
import '../../node_modules/jquery-ui-dist/jquery-ui.min.js';
import { MatchHeight } from 'js-match-height';

document.addEventListener('DOMContentLoaded', () => {
    console.log('running..');

    /*
    |--------------------------------------------------
    | Slider
    |--------------------------------------------------
    */

    var mySwiper = new Swiper('.swiper-container-inner', {
        speed: 400,
        autoplay: {
            delay: 550000000000,
            disableOnInteraction: true,
        },
        slidersPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
    });

    /*
    |--------------------------------------------------
    | Hamburger
    |--------------------------------------------------
    */

    $('.hamburger').click(function (event) {
        event.preventDefault();
        // Check if the hamburger icon is-active (ie. modal is open)
        if ($(this).hasClass('is-active')) {
            //Close modal menu
            $('.mobile-modal-menu').animate({
                opacity: '0',
            });
            $('.mobile-modal-menu').removeClass('is-active');
            $('#page-overlay').removeClass('modal-open');
            $(this).removeClass('is-active');
            $('body').removeClass('modal-menu-open');
        } else {
            $('.mobile-modal-menu').animate({
                opacity: '1',
            });
            $(this).addClass('is-active');
            $('body').addClass('modal-menu-open');
            $('.mobile-modal-menu').addClass('is-active');
            $('#page-overlay').addClass('modal-open');
        }
    });

    /*
    |--------------------------------------------------
    | Layout
    |--------------------------------------------------
    */

    // const matchHeight = new MatchHeight('.match-block-1');
    const matchHeightblock2 = new MatchHeight('.match-block-2');

    /*
    |--------------------------------------------------
    | Datepicker
    |--------------------------------------------------
    */

    const date_options = {
        dateFormat: 'dd-mm-yy',
        altFormat: 'yy-mm-dd',
    };

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate('dd-mm-yy', element.value);
        } catch (error) {
            console.log(error);
            date = null;
        }
        return date;
    }

    const departure = $('#datepicker_dpt').datepicker({ ...date_options, altField: '.datepicker-departure' });

    $('#datepicker_arv')
        .datepicker({ ...date_options, altField: '.datepicker-arrival' })
        .on('change', function () {
            departure.datepicker('option', 'minDate', getDate(this));
        });
});
