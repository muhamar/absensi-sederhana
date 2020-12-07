$(document).ready(function(){
    $(".preloader").delay(1500).fadeOut();
  })

$(function(){
    $('a[href^="#"]').on('click',function(e){

        $target = $(this.hash);
        $('html, body').stop().animate(
            {
                'scrollTop' : $target.offset().top - 80
            },
            1000, //durasi dalam milisekon
            'easeInOutExpo', //efek transisi (opsi : swing / linear)
 
        );
    });
});

$(window).scroll(function(){
var scroll = $(window).scrollTop();
if(scroll>=70){
    $('.navbar').addClass('warna-navbar');;
}else{
    $('.navbar').removeClass('warna-navbar');
}
});

