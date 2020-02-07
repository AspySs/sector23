window.onload = function() {
    var header = document.body.querySelector('header');
        if (document.documentElement.clientWidth < 768) {
        window.addEventListener('scroll', function() {
                if (window.pageYOffset >= 100) {
                    header.style.backgroundColor = "rgb(0, 0, 0, 0.8)";
                }
                else {
                    header.style.backgroundColor = "rgb(0, 0, 0)";
                }
            });
        }
}