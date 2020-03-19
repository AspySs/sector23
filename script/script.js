    var menu = $('#mobileMenu'),
    menuStatus = 'hide';

    $('#mobileMenuBtn span:nth-child(1)').css('transform', 'translateY(-10px)');
    $('#mobileMenuBtn span:nth-child(3)').css('transform', 'translateY(10px)');

    function mobileMenu() {
        if (menuStatus == 'hide') {
            menu.css('left', '0');
            $('#mobileMenuBtn span:nth-child(1)').css({'transform': 'rotate(-45deg)',
            });
            $('#mobileMenuBtn span:nth-child(2)').css('transform', 'rotate(45deg)');
            $('#mobileMenuBtn span:nth-child(3)').css({'transform': 'translateY(16px)',
            'width': '20%', 'left': '40%'});
            menuStatus = 'show';
        }
        
        else {
            menu.css('left', '-200px');
            $('#mobileMenuBtn span:nth-child(1)').css({'transform': 'rotate(0)',
            'transform': 'translateY(-10px)'});
            $('#mobileMenuBtn span:nth-child(2)').css({'transform': 'rotate(0)', });
            $('#mobileMenuBtn span:nth-child(3)').css({'transform': 'translateY(10px)',
            'width': '60%', 'left': '20%'});
            menuStatus = 'hide';
        }
    }

$('.content').click( function() {
    if (menuStatus == 'show') {
        mobileMenu();
    }
});
    
    $('#mobileMenuBtn').click( function() {
        mobileMenu();
    });


$('.gallery').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    nav:true,
    navText: ['<img src="./img/leftArrow.svg">','<img src="./img/rightArrow.svg">'],
    responsive:{
        0:{
            items:1,
            nav: false,
            autoplay:false
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    },
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000
});


$('.comments').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    nav:true,
    navText: ['<img src="./img/leftArrow.svg">','<img src="./img/rightArrow.svg">'],
    responsive:{
        0:{
            items:1,
            nav: false,
            autoplay:false
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
    autoplay:true,
    autoplayTimeout: 7000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000
});


$(".topBtn").hide();

		$(window).scroll(function (){

			if ($(this).scrollTop() > 700){
				$(".topBtn").fadeIn();
            }  else  {
            	$(".topBtn").fadeOut();
            }

            
		});

$('.topBtn').click(function() {
    $("body,html").animate({ scrollTop:0 }, 800);
});


$('#mobileMenu span:nth-child(1)').click( function() {
    $("body,html").animate({ scrollTop: ($('#about').offset().top - 30)}, 1500);
    mobileMenu();
});

$('#mobileMenu span:nth-child(2)').click( function() {
    $("body,html").animate({ scrollTop: ($('#price').offset().top - 100) }, 1500);
    mobileMenu();
});


$('header a:nth-child(4)').click( function() {
    $("body,html").animate({ scrollTop: ($('#price').offset().top - 100) }, 1500);
});

$('header a:nth-child(5)').click( function() {
    $("body,html").animate({ scrollTop: ($('#about').offset().top - 30)}, 1500);
});
