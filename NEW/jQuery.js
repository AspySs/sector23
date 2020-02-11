$(document).ready(function() {

var slideNow = 1,
translateWidth = 0,
slideInterval = 3500,
slideCount = $('.carousel').children().length,
switchInterval = setInterval(nextSlide, slideInterval);

$('.slider-block').hover( function() {
    clearInterval(switchInterval);
}, function(){
    switchInterval = setInterval(nextSlide, slideInterval);
})

function nextSlide() {
    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
        $('.carousel').css('transform', 'translate(0, 0)');
        slideNow = 1;
    } else {
        translateWidth = - $('.viewport').width() * (slideNow);
        $('.carousel').css({
            'transform': 'translate('+ translateWidth + 'px, 0)'
        });
        slideNow++;
    }
}

function prevSlide() {
    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
        translateWidth = - $('.viewport').width() * (slideCount-1);
        $('.carousel').css('transform', 'translate('+ translateWidth + 'px, 0)');
        slideNow = slideCount + 1;
    } else {
        translateWidth = - $('.viewport').width() * (slideNow - 2);
        $('.carousel').css({
            'transform': 'translate('+ translateWidth + 'px, 0)'
        });
    }
        slideNow--;
};

$('.next').click( function() {
    nextSlide();
});

$('.prev').click( function() {
    prevSlide();
});

});