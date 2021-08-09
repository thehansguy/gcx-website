///////////////////////////////////////
// preloader
///////////////////////////////////////
document.addEventListener("DOMContentLoaded", function () {
    $('.preloader-background').delay(1000).fadeOut('slow');

    $('.preloader-wrapper')
        .delay(1000)
        .fadeOut();
});

////////////////////////
//// Google Map Control
///////////////////////



////////////////////////////////////////
// Navigation
////////////////////////////////////////
jQuery(document).ready(function ($) {

    $('#membership_list').DataTable();
    $('#brokers_list').DataTable();


    $('.news-wrapper').responsiveEqualHeightGrid();
    $('.news-title').responsiveEqualHeightGrid();
    $('.news-date').responsiveEqualHeightGrid();
    $('.news-short-description').responsiveEqualHeightGrid();
    $('.news-content-link').responsiveEqualHeightGrid();
    $('.news-content-read-more').responsiveEqualHeightGrid();

    $('.news-row').responsiveEqualHeightGrid();
    $('.news-row-column').responsiveEqualHeightGrid();
    $('.news-row-panel').responsiveEqualHeightGrid();
    $('.news-row-column-img').responsiveEqualHeightGrid();



    $('.partners_image').responsiveEqualHeightGrid();
    $('.position').responsiveEqualHeightGrid();



    //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
    var MQL = 1170;
    //primary navigation slide-in effect
    if ($(window).width() > MQL) {
        var headerHeight = $('.cd-header').height();
        $(window).on('scroll', {
            previousTop: 0
        }, function () {
            var currentTop = $(window).scrollTop();
            //check if user is scrolling up
            if (currentTop < this.previousTop) {
                //if scrolling up...
                if (currentTop > 0 && $('.cd-header').hasClass('is-fixed')) {
                    $('.cd-header').addClass('is-visible');
                } else {
                    $('.cd-header').removeClass('is-visible is-fixed');
                }
            } else {
                //if scrolling down...
                $('.cd-header').removeClass('is-visible');
                if (currentTop > headerHeight && !$('.cd-header').hasClass('is-fixed'))
                    $('.cd-header').addClass('is-fixed');
            }
            this.previousTop = currentTop;
        });
    }
    //open/close primary navigation
    $('.cd-primary-nav-trigger').on('click', function () {
        $('.cd-menu-icon').toggleClass('is-clicked');
        $('.cd-header').toggleClass('menu-is-open');
        //in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
        if ($('.cd-primary-nav').hasClass('is-visible')) {
            $('.cd-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                $('body').removeClass('overflow-hidden');
            });
        } else {
            $('.cd-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                $('body').addClass('overflow-hidden');
            });
        }
    });
});

/*
var speed = 5000;
(function ticker(){
    $('.ticker-item').each(function(index){
      var tickeritemWidth = $(this).outerWidth();
      $("#ticker").animate({marginLeft:-tickeritemWidth},speed, 'linear', function(){
        $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
      });
    });
    ticker();
})();
*/

/*
var speed = 500000;
(function ticker(){
      console.log("items");
    $('.ticker-item').each(function(index){
      console.log("ditems");
      var tickeritemWidth = $(this).outerWidth();
      $("#ticker").animate({marginLeft:-tickeritemWidth},speed, 'linear', function(){
        $(this).css({marginLeft:0}).find("div:last").after($(this).find("div:first"));
      });
    });
    ticker();
})();*/
// Mouse Over logo switch
function hover() {
    document.getElementById("logo").setAttribute('src', 'https://gcx.com.gh/assets/img/logo_black.png');
}
;
function unhover() {
    document.getElementById("logo").setAttribute('src', 'https://gcx.com.gh/assets/img/logo_white.png');
}
;

//Nav Hover
$('.dropdown').hover(function () {
    $(this).addClass('open');
}, function () {
    $(this).removeClass('open');
});

// Smooth Scroll Config
// Select all links with hashes
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .not('[href="#Maize"]')
    .not('[href="#Rice"]')
    .not('[href="#Soy"]')
    .not('[href="#Sorghum"]')
    .not('[href="#Sesame"]')
    .not('[href="#SignIn"]')
    .not('[href="#Register"]')
    .not('[href="#collapseOne"]')
    .not('[href="#collapseTwo"]')
    .not('[href="#collapseThree"]')
    .not('[href="#collapseFour"]')
    .not('[href="#collapseFive"]')
    .not('[href="#Section_1"]')
    .not('[href="#Section_2"]')
    .not('[href="#Section_3"]')
    .not('[href="#Section_4"]')
    .not('[href="#Section_5"]')
    .not('[href="#Section_6"]')
    .not('[href="#Section_7"]')
    .not('[href="#Section_8"]')
    .not('[href="#Section_9"]')
    .not('[href="#Section_0"]')
    .not('[href="#Section_11"]')

// Freeze to disable funny nav scrolling on click

// .click(function (event) {
//     // On-page links
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//         // Figure out element to scroll to
//         var target = $(this.hash);
//         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//         // Does a scroll target exist?
//         if (target.length) {
//             // Only prevent default if animation is actually gonna happen
//             event.preventDefault();
//             $('html, body').animate({
//                 scrollTop: target.offset().top
//             }, 500, function () {
//                 // Callback after animation
//                 // Must change focus!
//                 var $target = $(target);
//                 $target.focus();
//                 if ($target.is(":focus")) { // Checking if the target was focused
//                     return false;
//                 } else {
//                     $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
//                     $target.focus(); // Set focus again
//                 }
//                 ;
//             });
//         }
//     }
// });


///////////////////////////
/// Google Charts Api ///
///////////////////////////
/*
// Load Charts and the corechart package.
google.charts.load('current', {packages: ['corechart', 'bar']});

// Draw Pie Chart For Maize
google.charts.setOnLoadCallback(drawMaizeChart);

// Draw the pie chart for Sarah's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawRiceChart);

// Draw the pie chart for the Anthony's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawSoyChart);

// Draw the pie chart for the Anthony's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawAllCommoditiesChart);

// Maize Chart
function drawMaizeChart() {
    var data = google.visualization.arrayToDataTable([
        ['Commodity', '50kg Bag', {role: 'style'}],
        ['Grade 1', 69, '#f2f2f2'],
        ['Grade 2', 72, '#d8d8d8'],
        ['Grade 2', 73, '#d8d8d8'],
    ]);

    var options = {

        chartArea: {width: '50%'},
        hAxis: {
            title: 'Price / GHC',
            minValue: 0
        },
        vAxis: {
            title: 'White Maize'
        }
    };

    var chart = new google.visualization.BarChart(document.getElementById('Maize_Chart'));

    chart.draw(data, options);
}

// Rice Chart
function drawRiceChart() {
    var data = google.visualization.arrayToDataTable([
        ['Mon', 20, 28, 38, 45],
        ['Tue', 31, 38, 55, 66],
        ['Wed', 50, 55, 77, 80],
        ['Thu', 77, 77, 66, 50],
        ['Fri', 68, 66, 22, 15]

                // Treat first row as data as well.
    ], true);

    var options = {legend: 'none'};

    var chart = new google.visualization.CandlestickChart(document.getElementById('Rice_Chart'));

    chart.draw(data, options);
}

// Soy Chart
function drawSoyChart() {
    var data = google.visualization.arrayToDataTable([
        ['Mon', 50, 55, 77, 80],
        ['Tue', 77, 77, 66, 50],
        ['Wed', 50, 55, 77, 80],
        ['Thu', 31, 38, 55, 66],
        ['Fri', 68, 66, 22, 15]

                // Treat first row as data as well.
    ], true);

    var options = {legend: 'none'};

    var chart = new google.visualization.CandlestickChart(document.getElementById('Soy_Chart'));

    chart.draw(data, options);
}

// All Commodities
function drawAllCommoditiesChart() {
    // Some raw data (not necessarily accurate)
    var data = google.visualization.arrayToDataTable([
        ['Month', 'Maize', 'Rice', 'Soy', 'Coffee', 'Cocoa', 'Cashew', 'Average'],
        ['2004/05', 165, 938, 522, 1243, 998, 450, 614.6],
        ['2005/06', 135, 1120, 599, 1243, 1268, 288, 682],
        ['2006/07', 157, 1167, 587, 1243, 807, 397, 623],
        ['2007/08', 139, 1110, 615, 1243, 968, 215, 609.4],
        ['2008/09', 136, 691, 629, 1243, 1026, 366, 569.6]
    ]);

    var options = {
        vAxis: {title: 'Metric Tonnes'},
        hAxis: {title: 'Month'},
        seriesType: 'bars',
        series: {6: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('All_Commodities_Chart'));
    chart.draw(data, options);
}*/


/////////////////////////////
// Parallax Smooth Scroll
/////////////////////////////
window.ss_raf = window.requestAnimationFrame || (function (callback, element) {
    setTimeout(callback, 1000 / 60);
});

function smoothScroll(target, afterScroll) {
    //     if (!target)
    //         target = window;
    //     target.addEventListener("mousewheel", function (e) {
    //         e.preventDefault();
    //         e.stopPropagation();
    //         target.ySpd -= e.wheelDelta;
    //     }.bind(this));
    //     target.addEventListener("DOMMouseScroll", function (e) {
    //         e.preventDefault();
    //         e.stopPropagation();
    //         target.ySpd += e.detail * 40;
    //     }.bind(this));
    //     target.ySpd = 0;
    //     target.scrollTo = function (y) {
    //         target.ySpd = y - target.scrollTop;
    //     }.bind(this);
    //     ss_frame(target, afterScroll);
    // }

    // function ss_frame(t, a) {
    //     if (t.ySpd > 0.5 || t.ySpd < -0.5) {
    //         if (t === window)
    //             t.scrollBy(0, t.ySpd * 0.05);
    //         else
    //             t.scrollTop += Math.round(t.ySpd * 0.05);
    //         t.ySpd *= 0.95;
    //     }
    //     if (a)
    //         a();
    //     ss_raf(function () {
    //         ss_frame(t, a)
    //     });
}
;

///////////////////
//Parallax Effect//
///////////////////
function parallax() {
    var areas = document.getElementsByClassName("scene_area");
    for (var i = 0; i < areas.length; i++) {
        var x = areas[i];
        var off = x.getBoundingClientRect().top;
        var layers = x.getElementsByClassName("scene_layer");
        for (var j = 0; j < layers.length; j++) {
            var e = layers[j];
            e.style.top = Number(e.getAttribute("data-parallax")) * (off) + "px";
        }
    }
}
;

//////////////////////////////////////////////
// iOS Parallax Fix
//////////////////////////////////////////////
function getScroll(elem, iscroll) {
    var x, y;
    if (Modernizr.touch && iscroll) {
        x = iscroll.x * -1;
        y = iscroll.y * -1;
    } else {
        x = elem.scrollTop;
        y = elem.scrollLeft;
    }

    return { x: x, y: y };
}
;

/*
var myScroller = Modernizr.touch ? new iScroll('scroller')
        : null;
(function animationloop() {
    window.requestAnimationFrame(animationloop);

    // Now use 'getScroll' function
    var scroll = getScroll(window, myScroller);

    //Values are now normalised cross platform:
    scroll.x;
    scroll.y;

})();*/

///////////////////////////////
///// Sticky Nav
/////////////////////////////
$(window).scroll(function () {
    if ($(document).scrollTop() > $("#Home").outerHeight() + 63) {
        $('#Nav_alt').addClass('navbar-fixed-top animated fadeInDown');
        $('#Welcome').css("margin-top", "calc(63px + 1%)");

    } else {

        $('#Nav_alt').removeClass('navbar-fixed-top animated fadeInDown');
        $('#Welcome').css("margin-top", "0px");
    }
});






///////////////////////////
/// Carousel ///
///////////////////////////
function carouselNormalization() {
    var items = $('#large_slider .item'), //grab all slides
        heights = [], //create empty array to store height values
        tallest; //create variable to make note of the tallest slide

    if (items.length) {
        function normalizeHeights() {
            items.each(function () { //add heights to array
                heights.push($(this).height());
            });
            tallest = Math.max.apply(null, heights); //cache largest value
            items.each(function () {
                $(this).css('min-height', tallest + 'px');
            });
        }
        ;
        normalizeHeights();

        $(window).on('resize orientationchange', function () {
            tallest = 0, heights.length = 0; //reset vars
            items.each(function () {
                $(this).css('min-height', '0'); //reset min-height
            });
            normalizeHeights(); //run it again
        });
    }
}
