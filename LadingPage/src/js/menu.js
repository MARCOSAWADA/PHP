$(document).ready(function(){
    $('.mobile-btn').on('click',function(){
        $('.mobile-menu').toggleClass('active');
        $('.mobile-btn').find('i').toggleClass('fa-x'); /*muda a barra do menu para x*/
        // $('.mobile-btn').find('i').toggleClass('fa-thumbs-up');
        // "fa-sharp fa-light fa-thumbs-up"
        // $('.mobile-btn').find('i').toggleClass('fa-puzzle-piece');
        // <FontAwesomeIcon icon="fa-solid fa-dice" />

        // no google pesquise = font awesome
    })
})