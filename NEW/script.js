window.onload = function() {
    var header = document.body.querySelector('header'),
        dropmenu = document.body.querySelector(".dropmenu"),
        droplist = document.body.querySelector(".dropmenu").getElementsByTagName("a"),
        svg = document.body.querySelector(".dropmenu").querySelector("svg"),
        mBtn = document.body.querySelector(".mBtn"),
        mMenu = document.body.querySelector(".mMenu"),
        mBtnSpan = document.body.querySelector(".mBtn").getElementsByTagName("span");
        mMenuCheck = "hidden",
        dropcheck = "hidden";

        mBtn.onclick = Menu;

        dropmenu.onclick = drop;
        
        svg.style.transform = "rotate(180deg)";
        
        svg.style.transform = "rotate(360deg)";

        if (document.documentElement.clientWidth < 768) {
        window.addEventListener('scroll', function() {
                if (window.pageYOffset >= 100) {
                    header.style.backgroundColor = "rgb(0, 0, 0, 0.8)";
                }
                else {
                    header.style.backgroundColor = "rgb(12, 12, 12)";
                }
            });
        }

        function Menu() {

            if (mMenuCheck == "hidden") {
                mMenu.style.right = "0";
                mBtnSpan[0].style.opacity = "0";
                mBtnSpan[1].style.transform = "translateY(10px)";
                mBtnSpan[2].style.transform = "translateY(-10px)";
                mBtnSpan[1].style.transform = "rotate(45deg)";
                mBtnSpan[2].style.transform = "rotate(-45deg)";
                mMenuCheck = "open";
                return 0;
            }

            if (mMenuCheck == "open") {
                mMenu.style.right = "calc(-45%)";
                mBtnSpan[0].style.opacity = "1";
                mBtnSpan[1].style.transform = "rotate(0)";
                mBtnSpan[1].style.transform = "translateY(-10px)";
                mBtnSpan[2].style.transform = "rotate(0)";
                mBtnSpan[2].style.transform = "translateY(10px)";
                mMenuCheck = "hidden";
                return 0;
            }
        }


    function drop() {

                if (dropcheck == "hidden") {
                    for (i = 0; i < droplist.length; i++) {
                        droplist[i].style.opacity = "1";
                    }
                    dropcheck = "open";
                    svg.style.transform = "rotate(180deg)";
                    return 0;
                }

                if (dropcheck == "open") {
                    for (i = 0; i < droplist.length; i++) {
                        droplist[i].style.opacity = "0";
                    }
                    dropcheck = "hidden";
                    svg.style.transform = "rotate(360deg)";
                    return 0;
                }
            }

}
 