window.onload = function() {
        if (window.screen.width <= 768) {
            $('#topAn').animate({
                'left': '0'
            }, {
                duration: 1500,
                complete: function() {
                    $('#topAn').animate({
                        'width': '80%',
                        'height': '150px',
                        'background': '#fff',
                        'border': '1px solid #212121',
                        'color': '#fff',
                        'padding': '5px 15px'
                    }, 1000);
    
                    var text = setTimeout(()=>{
                        document.body.querySelector("#topAn").innerHTML = "<h1>Sector 23 <h1><h3>Зона активного отдыха<h3>";
                    }, 1000);
            }
        });  }
            else {
            $('#topAn').animate({
                'left': '20px'
            }, {
                duration: 1500,
                complete: function() {
                    $('#topAn').animate({
                        'width': '400px',
                        'height': '110px',
                        'background': '#fff',
                        'border': '2px solid #212121',
                        'color': '#fff',
                        'padding': '5px 15px'
                    }, 1000);
    
                    var text = setTimeout(()=>{
                        document.body.querySelector("#topAn").innerHTML = "<h1>Sector 23 <h1><h3>Зона активного отдыха<h3>";
                    }, 1000);

                    $('body').css('overflow-y', 'visible');
            }
        }); }
    }
        
    $(window).scroll(function (){

        if ($(this).scrollTop() > 200){
            $("#mobileHeaderName").fadeIn();
        }  else  {
            $("#mobileHeaderName").fadeOut();
        }

        
    });
    
    var menu = $('#mobileMenu'),
    menuStatus = 'hide';

    $('#mobileMenuBtn span:nth-child(1)').css('transform', 'translateY(-8px)');
    $('#mobileMenuBtn span:nth-child(3)').css('transform', 'translateY(8px)');

    function mobileMenu() {
        if (menuStatus == 'hide') {
            menu.css('left', '0');
            $('#mobileMenuBtn span:nth-child(3)').css({'width': '50%'});
            menuStatus = 'show';
        }
        
        else {
            menu.css('left', '-200px');
            $('#mobileMenuBtn span:nth-child(3)').css({'width': '35%'});
            menuStatus = 'hide';
        }
    }

    $('#mobileMenuBtn').click( function() {
        mobileMenu();
    });

$('.content').click( function() {
    if (menuStatus == 'show') {
        mobileMenu();
    }
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
