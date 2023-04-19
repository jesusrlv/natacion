$(function(){
    $(window).scroll(function(){
       if ($(this).scrollTop() > 100) {
        $('.nav-link').addClass("azul");
        $('.navscroll').addClass("azul");
        $('.navbar-brand').addClass("azul");
       } else {
        $(".nav-link").removeClass("azul");
        $(".navscroll").removeClass("azul");
        $(".navbar-brand").removeClass("azul");
       }
    });
});