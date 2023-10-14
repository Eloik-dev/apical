$(document).ready(() => {
    $('#login-popup-button').on('click', (e) => {
        e.preventDefault();
        $('login-popup').get(0).toggle();
    })
})