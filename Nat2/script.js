$(function(){
    $(window).scroll(function(){
       if ($(this).scrollTop() > 100) {
        $('.nav-link').addClass("azul");
        $('.navscroll').addClass("azul");
        $('.navbar-brand').addClass("azul");
        $('#navUno').attr("hidden",true);
        $('#navDos').attr("hidden",false);
        // $('.navscroll').addClass("text-center");
        // $('.navscroll').addClass("text-light");
       } else {
        $(".nav-link").removeClass("azul");
        $(".navscroll").removeClass("azul");
        $(".navbar-brand").removeClass("azul");
        $('#navUno').attr("hidden",false);
        $('#navDos').attr("hidden",true);
       }
    });
});

// animación scroll

$("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});