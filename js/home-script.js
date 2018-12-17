$(function () {
    // adding map
    let mapPos = $('.map-container')[0].offsetTop;
    let prevScrollPos = 0;
    $(window).scroll(function (event) {
        let scrollPos = window.scrollY;
        if (scrollPos <=  prevScrollPos - 50 || scrollPos >= prevScrollPos + 50) {
            prevScrollPos = scrollPos;
            if (scrollPos + window.innerHeight >= mapPos && $('.map .map-container').html() === '') {
                revealYandexMap();
            }
        }
    })
});
