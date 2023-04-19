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

// animación scroll

$("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
});