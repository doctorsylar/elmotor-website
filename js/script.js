$(function () {
    $('#menu-toggler').click(function () {
        $('.navigation').slideToggle(200);
    });
});
function revealYandexMap () {
    $('.map-container').html(`<iframe src="https://yandex.ru/map-widget/v1/-/CBFs4PwkwA"
                    width="100%"
                    height="500px"
                    frameborder="0"
                    allowfullscreen="true"></iframe>`);
}