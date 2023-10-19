const $ = jQuery;
$(document).ready(() => {
    $('#login-popup-button').on('click', (e) => {
        e.preventDefault();
        $('login-popup').get(0).toggle();
    })

    $('.develop').on('click', function () {
        $(this).text($(this).text().trim() == 'Tout développer' ? 'Réduire' : 'Tout développer');
        $('.ui-sortable .card .card-body').toggleClass('active');
    })

    $('.ui-sortable .card-header').on('click', function () {
        $(this).parent().find('.card-body').toggleClass('active');
    })
})