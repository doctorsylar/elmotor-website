"use strict";
$(function () {
    $('.tab-item').click(function (event) {
        $('.tab-item').removeClass('active');
        $(event.target).addClass('active');
        $('#tab-picture').fadeOut(200, 'linear', function () {
            $('#tab-picture').attr('src',
                '/wp-content/themes/elmtr/img/search/' + event.target.innerHTML.toLowerCase().substr(0, 6)
                + '.gif');
            $('#tab-picture').attr('alt', event.target.innerHTML);
            $('#tab-picture').fadeIn(200);
        });
    });
});