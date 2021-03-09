$(document).ready(function () {

    // ******************* hamburger *******************
    $(".hamburger").click(function () {
        $(this).toggleClass("is-active")
    });

    // ******************* slider *******************
    $('.slider-thumb').slick({
        // autoplay: true,
        vertical: true,
        infinite: true,
        verticalSwiping: true,
        slidesPerRow: 1,
        slidesToShow: 1,
        asNavFor: '.slider-preview',
        focusOnSelect: true,
        arrows: false,
        centerMode: true,
        // draggable: false,
        centerPadding: '42px',

    });
    $('.slider-preview').slick({
        // autoplay: true,
        vertical: false,
        infinite: true,
        fade: true,
        slidesPerRow: 1,
        slidesToShow: 1,
        asNavFor: '.slider-thumb',
        arrows: true,
        dots: true,
        draggable: false,
    });

    // клик по кнопке заявка с сайта
    $(".sale_item .right").click(function () {
        $(this).toggleClass("active");
    });

    // плавный переход якоря

    var myHash = location.hash; //получаем значение хеша
    location.hash = ''; //очищаем хеш
    if (myHash[1] != undefined) { //проверяем, есть ли в хеше какое-то значение
        $('html, body').animate({scrollTop: $(myHash).offset().top}, 500); //скроллим за полсекунды
    }


    $('.slick-reviews').slick({
        centerMode: true,
        centerPadding: '30%',
        slidesToShow: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                }
            }
        ]
    });


    // показать еще на странице о нас
    $(".still").click(function () {
        $(".reviews-about").toggleClass("open");
    });
    $(".still").on("click", function (event) {
        $(this).fadeOut(300, function () {
            $(".review_item.hidden_start").fadeIn(300);
        });
    });

    // аккордион список цен
    $(".priceBox-click").click(function () {
        if ($(this).parents(".priceBox").hasClass("active")) {
            $(this).parents(".priceBox").removeClass("active");
            $(this).parents(".priceBox").find(".priceBox-description").slideUp();
        } else {
            $(".priceBox-description").slideUp();
            $(".priceBox").removeClass("active");
            $(this).parents(".priceBox").addClass("active");
            $(this).parents(".priceBox").find(".priceBox-description").slideDown();
        }
    })


    // модальное окно
    //Открытие окна форма обратной связи
    $('.popup-open').click(function() {
        $('.popup-overlay').toggleClass('open');

    });

    //Закрытие окна по клику на кнопку
    $('.popup-close').click(function() {
        $('.popup-overlay').removeClass('open');
    });

    //Закрытие окна по клику вне элемента
    $(".popup-overlay").on('click', function(e) {
        if (!$(e.target).closest(".popup").length) {
            $(this).removeClass('open');
        } e.stopPropagation();
    });


    //Открытие окна политика конфиденсиальности
    $('.popup-open-politic').click(function() {
        $('.popup-politic').toggleClass('open');

    });

    //Закрытие окна по клику на кнопку
    $('.popup-close').click(function() {
        $('.popup-overlay').removeClass('open');
    });

    //Закрытие окна по клику вне элемента
    $(".popup-overlay").on('click', function(e) {
        if (!$(e.target).closest(".popup").length) {
            $(this).removeClass('open');
        } e.stopPropagation();
    });



    // обработкаформы обратной связи
    $('#btn_submit').click(function(){
        // собираем данные с формы
        var user_name    = $('#user_name').val();
        var user_phone   = $('#user_phone').val();
        var text_comment = $('#text_comment').val();
        // отправляем данные
        $.ajax({
            url: "action.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "user_name":    user_name,
                "user_phone":   user_phone,
                "text_comment": text_comment
            },
            // после получения ответа сервера
            success: function(data){
                $('.messages').html(data.result); // выводим ответ сервера
            }
        });
    });

});

$(window).scroll(function () {
    var height = $(window).scrollTop();

    if (height > 80) {
        $('header').addClass('fixed');
    } else {
        $('header').removeClass('fixed');
    }
});