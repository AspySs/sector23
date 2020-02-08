<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <!-- <script src="./js/script.js"></script> -->
    <title>Sector 23</title>
</head>
<body>

        <div class="menu">
            <div class="black"></div>
            <div class="row">
            <a href="#">Главная <span></span></a>
            <a href="#">Рассчитать стоимость <span></span></a>
            <a href="#">Блог <span></span></a>
            </div>
            <div class="row">
            <a class="bottom" href="#">Пейнтбол <span></span></a>
            <a class="bottom" href="#">Лазертаг <span></span></a>
            <a class="bottom" href="#">Страйкбол <span></span></a>
            </div>
        </div>

        <div class="content">
            <div class="content-l">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur cumque sint quasi ea, soluta perspiciatis, placeat, ipsam officiis voluptatem repellendus aut natus culpa fugit? Reiciendis maiores facere odit impedit nam, autem recusandae pariatur deleniti laboriosam doloribus hic esse saepe enim, accusamus ad vel. Nulla obcaecati consequuntur itaque eveniet deleniti facilis iusto ut, quae vitae harum animi vero asperiores non minima? Dolorum nisi molestiae ab, ea iure repellat placeat, minus incidunt aspernatur veritatis nostrum, perferendis numquam perspiciatis. Rem, iusto. Minus cumque quam ipsum. Inventore, vero cum fugiat a laboriosam sequi eligendi quidem corporis ut minus, quia quisquam quaerat, repudiandae debitis tempore voluptates distinctio ex porro iusto quae quas magni delectus tenetur. Similique alias quo maiores fuga id expedita error quos eaque eveniet. Optio molestias, deleniti fuga odit, voluptatem harum ducimus repellendus nobis veritatis aspernatur itaque, officiis ut. Ipsum magnam saepe accusantium alias aspernatur. Molestias at provident eum dignissimos unde quisquam, dolores incidunt enim doloremque aliquam sit obcaecati, similique in aliquid fuga perferendis modi harum debitis hic expedita. Natus fugit ut vel illum exercitationem consequatur optio necessitatibus provident perferendis hic quia architecto labore explicabo fuga, sed corrupti vitae quae, laboriosam saepe, inventore enim tempora esse? Expedita maxime, maiores nobis blanditiis repellat laborum recusandae numquam. Tempora laboriosam delectus vel magnam fuga corrupti a quibusdam, distinctio non reiciendis consequuntur alias consectetur id culpa voluptatem reprehenderit pariatur vero dolor ullam eum beatae assumenda laudantium! Dignissimos cupiditate ipsa corrupti laborum eligendi iusto rerum qui minima modi porro perferendis quia praesentium optio quod provident blanditiis reprehenderit neque, eveniet, cum aliquam excepturi veniam. Error ducimus ex sed, laborum placeat excepturi maiores consequuntur earum explicabo vero doloribus illum animi et modi reprehenderit minima veniam vel quam? Esse amet dolor explicabo quibusdam facere minima sequi, nulla veniam perspiciatis ex enim excepturi optio alias expedita sint, eum veritatis ducimus aspernatur earum vel numquam. In error repellat non voluptates veritatis distinctio doloremque. Explicabo neque, tenetur accusantium earum dolor quis sunt nulla vero voluptatum nihil ullam vel, dolores sed sint officiis voluptatibus eaque qui. Illum, non! Corrupti mollitia dolor, iure molestiae perspiciatis, aut hic officiis, doloribus voluptates ipsum porro amet sequi illo quos rem veritatis ratione ea debitis suscipit. Minus dolor nam obcaecati ut assumenda esse possimus, at corrupti aspernatur quia expedita maiores voluptatibus atque dolorem veniam laboriosam fuga sequi, officiis maxime nulla enim sed, quod omnis quidem. Quibusdam pariatur animi exercitationem sed quisquam perferendis dolore architecto ab ea, quae a reiciendis magni.

            
            </div>
            <div class="content-r">
                <img src="./img/rt-ph.png">
            </div>
            
           
        </div>
        
        <div class="comm">
            <h2>ОТЗЫВЫ КЛИЕНТОВ</h2>

            <div class="carousel">
                <a href="#1" class="prev" onclick="prev()">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
<g>
    <g>
        <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12
            C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084
            c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864
            l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"/>
    </g>
</g>
</svg>

                </a>


                <!-- НАЧАЛО БЛОКА С ОТЗЫВОМ -->
                    <?php
include 'includes/bd.php';
$ALL = $bd -> query("SELECT * FROM `comments`");
$ALLids = $bd -> query("SELECT `id` FROM `comments`");
$bd->close();
$all = vivALL($ALL);
$colvo = vivCOL($ALLids);

function vivALL($result_set){
$o = 0;
$peopleK = array(array());
    while(($row = $result_set->fetch_assoc()) != false){
        $peopleK[$o][0] = $row["id"];
        $peopleK[$o][1] = $row["nickname"];
        $peopleK[$o][2] = $row["text"];
        $peopleK[$o][3] = $row["time"];
        $peopleK[$o][4] = $row["checked"];
        $peopleK[$o][5] = $row["picname"];
        $o +=1;     
        
    } 
    unset($o);
    return $peopleK;
}
function vivCOL($result_set){

    while(($row = $result_set->fetch_assoc()) != false){        
    }
        $numb = $result_set->num_rows;
        return $numb;
}
for($i=0;$i<$colvo;$i++){if($all[$i][4]=='true')
                echo"
                    <div style=\"display: none;\" class=\"otz\">
                        <img src=\"./img_for_comm/".$all[$i][5]."\" alt=\"\">
                        <p>".$all[$i][2]."</p>
                        <b>".$all[$i][1]."</b>
                    </div>
                    ";
}
                    ?>

                <!-- КОНЕЦ БЛОКА С ОТЗЫВОМ -->

                    <div style="display: none;" class="otz">
                        <img src="./img/rt-ph.png" alt="">
                        <p>FFFFFFFFFFFFFFFFFFFFFFFFF FFFFFFFFFFFFFFFFFFFFFFFFFFF. Reiciendis dolores repellendus dolor in excepturi itaque. Animi dicta aliquam rerum dolor ut in eaque quasi deleniti, ducimus tempora, voluptatum quidem magni quam fugiat fugit culpa accusantium minima, praesentium sint beatae libero!</p>
                            <b>Lorem, ipsum dolor.</b>
                    </div>

                    <div style="display: none;" class="otz">
                        <img src="./img/rt-ph.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam laboriosam omnis quam sint odit, voluptates natus vitae similique. Aut pariatur iusto dignissimos est animi culpa non corporis explicabo ipsum, aliquam hic, modi, officia laboriosam quos minima iure dicta reiciendis accusamus.</p>
                            <b>Lorem, ipsum dolor.</b>
                    </div>

                <a href="#1" class="next" onclick="next()">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve">
<g>
    <g>
        <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
            c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
            c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
            c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/>
    </g>
</svg>

                </a>
            </div>

        </div>

    <script>
    var slide = document.body.querySelectorAll(".otz");
var i =0;
        slide[0].style.display = "inline-block";

function next() {
        slide[i].style.display = "none";
        i += 1;
        if (i >= slide.length) i = 0;
        slide[i].style.display = "inline-block";
    }

    function prev() {
        slide[i].style.display = "none";
        i -= 1;
        if (i < 0) i = slide.length - 1;
        slide[i].style.display = "inline-block";
    }
    </script>
</body>
</html>