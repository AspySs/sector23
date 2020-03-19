<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sector 23</title>
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
    <script src="./script/jquery.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=b9e4d38e-4224-4bdd-b04a-8e04841d3e14" type="text/javascript"></script>
    <script type="text/javascript">


        ymaps.ready(function(){
                   
                var myMap = new ymaps.Map("map", {
                center: [43.914688, 39.335573],
                zoom: 14,
                controls: ['smallMapDefaultSet']
        }, {
            searchControlProvider: 'yandex#search'
        });
                myMap.geoObjects.add(new ymaps.Placemark([43.914688, 39.335573], {
                balloonContent: '<strong>Сектор 23</strong>'
                }, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                }));

                });
            
        
            </script>
</head>
<body>
    <span class="topBtn"><img src="./img/top.svg"></span>
    <header>
        <img src="./img/logo.svg" id="logo">
        <div id="mobileHeaderName">Sector</div>
        <a href="#">Блог</a>
        <a href="#">Цены</a>
        <a href="#">О нас</a>
        <span id="mobileMenuBtn">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </header>
    
    <ul id="mobileMenu">
        <span><a href="#">О нас</a></span>
        <span><a href="#">Цены</a></span>
        <span><a href="#">Блог</a></span>
    </ul>

    <div class="content">
        <div class="row">
            <h1>Сектор 23</h1>
            <h2>Зона активного отдыха</h2>
    
            <div class="owl-carousel owl-theme carousel gallery">
                <div class="item"><img src="./img/img1.jpg"></div>
                <div class="item"><img src="./img/img2.jpg"></div>
                <div class="item"><img src="./img/img3.jpg"></div>
                <div class="item"><img src="./img/img4.jpg"></div>
            </div>
        </div>
    
        <div class="row">
            <h3><r>7</r> Причин, чтобы выбрать Сектор 23</h3>
        <article>
            <h4><span>Комфорт и безопасность</span></h4>
            <img src="./img/shield.svg">
            <p>Мы предоставляем закрытый и оборудованный полигон в центре Лазаревского, играть на котором комфортно и безопасно</p>
        </article>
        <article>
            <h4><span>Зона отдыха</span></h4>
            <img src="./img/bbq.svg">
            <p>Помимо игры вы можете воспользоваться зоной отдыха с мангалом и печкой-буржуйкой</p>
        </article>
        <article>
            <h4><span>Разнообразие оборудования</span></h4>
            <img src="./img/helmet.svg">
            <p>У нас вы можете сыграть не только в пейнтбол, но и в лазертаг или страйкбол</p>
        </article>
        <article>
            <h4><span>Турниры</h4>
            <img src="./img/award.svg">
            <p>Есть возможность организовать турнир для компаний, классов и студенческих групп</p>
        </article>
        <article>
            <h4><span>Интересно всем</span></h4>
            <img src="./img/family.svg">
            <p>Активный отдых заинтересует как детей, так и взрослых</p>
        </article>
        <article>
            <h4><span>Организация мероприятий</span></h4>
            <img src="./img/event.svg">
            <p>Возможность провести лазертаг на выезде (при наличии подходящих условий)</p>
        </article>
        <article>
            <h4><span>Доступные цены</span></h4>
            <img src="./img/offer.svg">
            <p>Стоимость игры от 400 руб. Для компаний от 10 человек - скидки</p>
        </article>
        </div>

        

        <div class="row" id="about">
            <center><span>О нас</span></center>
            <div class="half">
                <h3>Где нас найти</h3>
                <div id="map">
                
                </div>
            </div>
            <div class="half">
                <h3>Связаться с нами</h3>
                <p>
                    Телефон: <br>
                    <a class="tel" href="tel:+79884013219">+7-988-401-32-19</a>
                    <a class="tel" href="tel:+7918405 7844">+7-918-405-78-44</a>
                    <a class="icon" href="https://vk.com/23sectorclub"><img src="./img/vk.svg"></a>
                    <a href="mailto:sector23@inbox.ru" class="icon"><img src="./img/mail.svg"></a>
                    <a class="icon" href="https://www.instagram.com/sector23club/"><img src="./img/instagram.svg"></a>    
                </p>
            </div>
        </div>
        
        <div class="row">
                <center><h2>Подробнее о ценах</h2></center>

            <div id="price">
                <img src="./img/money.svg">
                <div>
                    <h3>Пейнтбол</h3>
                    <p>
                        500 руб. - экипировка<br>
                        2 руб. - шарик с краской
                    </p>
                </div>
                <div>
                    <h3>Лазертаг</h3>
                    <p>
                        400 руб. / час
                    </p>
                </div>
            </div>
        </div>

        <center><span>Отзывы</span></center>
        <div class="owl-carousel owl-theme carousel comments">

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
                    <div div class=\"item\">
                        <img src=\"./img/comm/".$all[$i][5]."\" alt=\"\">
                        <h3>".$all[$i][1]."</h3>
                        <p>".$all[$i][2]."</p>
                    </div>
                    ";
}
                    ?>
<!-- 
            <div class="item">
                <img src="./img/img1.jpg">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat facilis tenetur aperiam illum pariatur a accusamus ad obcaecati commodi? Eos, labore porro eligendi culpa error non temporibus dolores cumque natus at ipsam cum voluptatem eius voluptatum! Perspiciatis officiis minima adipisci, deleniti numquam iste delectus voluptate culpa mollitia dolor hic illum.</p>
            </div>
            <div class="item">
                <img src="./img/img2.jpg">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat facilis tenetur aperiam illum pariatur a accusamus ad obcaecati commodi? Eos, labore porro eligendi culpa error non temporibus dolores cumque natus at ipsam cum voluptatem eius voluptatum! Perspiciatis officiis minima adipisci, deleniti numquam iste delectus voluptate culpa mollitia dolor hic illum.</p>
            </div>
            <div class="item">
                <img src="./img/img3.jpg">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat facilis tenetur aperiam illum pariatur a accusamus ad obcaecati commodi? Eos, labore porro eligendi culpa error non temporibus dolores cumque natus at ipsam cum voluptatem eius voluptatum! Perspiciatis officiis minima adipisci, deleniti numquam iste delectus voluptate culpa mollitia dolor hic illum.</p>
            </div> -->
        </div>
        <br>
        <center><h2>Оставить отзыв</h2></center>
        <?php
if(@$_GET['send']=='succes'){echo"Ваш комментарий доставлен на обработку";}
elseif (@$_GET['send']=='fail'){@$error = $_GET['error']; echo"<strong>".$error."</strong>";}
include_once('includes/functions.php');
?>
    <form id="comment" action="comments.php" method="post" enctype="multipart/form-data">
        <textarea id="" cols="25" rows="1" autofocus maxlength="60" type="text" placeholder="ФИО или ник" name="nickname"></textarea> <br>
        <input type="file" id="files" name="files" value="Выбрать фото" />
        <output id="list"></output>
        <textarea name="text" id="" cols="40" rows="10" autofocus maxlength="500" placeholder="Текст отзыва"></textarea> <br>
        <input id="comSubmit" type="submit" name="done" value="Отправить отзыв">
    </form>

<script type="text/javascript">
function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', theFile.name, '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>

    </div>
<!-- content-end -->



    <footer>
        <div class="row">
        <span>Дизайн и вёрстка сайта <a href="https://vk.com/maks_v0">Максим Возбранюк</a></span>
        <span>Админ-панель (back-end) <a href="https://vk.com/aspys">Александр Осипов</a></span>
        </div>
        <div class="row">
        <p>
            <span>Sector23</span>
            <span>г.Сочи п.Лазаревское ул.Пугачёва, 15</span>
            <span>+7-988-401-32-19 <br>
            +7-918-405-78-44</span>
        </p>
        </div>

    </footer>
    <script src="./script/owl.carousel.min.js"></script>
    <script src="script/script.js"></script>
    
    
</body>
</html>