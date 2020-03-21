<?php
session_set_cookie_params(21600);
session_start();
if($_SESSION['auth']=="true"){
include 'includes/bd.php';
$ALL = $bd -> query("SELECT * FROM `comments`");
$ALLids = $bd -> query("SELECT `id` FROM `comments`");
$ALLusers = $bd -> query("SELECT * FROM `users`");
$ALLtimes = $bd -> query("SELECT `time` FROM `users`");
$bd->close();
$COLVO = vivCOL1($ALLusers);
$all = vivALL($ALL);
$colvo = vivCOL($ALLids);
$times = vivALLtimes($ALLtimes);
$time = time();
}else{header("Location: auth");}

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
function vivALLtimes($result_set){
$p = 0;
$tim = array();
    while(($row = $result_set->fetch_assoc()) != false){
        $tim[$p] = $row["time"];
        $p +=1;     
        
    } 
    unset($p);
    return $tim;
}
function vivCOL($result_set){

    while(($row = $result_set->fetch_assoc()) != false){        
    }
        $numb = $result_set->num_rows;
        return $numb;
}

function vivCOL1($result_set){

    while(($row = $result_set->fetch_assoc()) != false){
        $numb = $result_set->num_rows;
        return $numb;
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script src="script/jquery.js"></script>
</head>
<body>

    <ul id="stat">
        <li>Сейчас онлайн: <?php $today = 0; for($ii=0;$ii<$COLVO;$ii++){if($times[$ii] >= ($time - 600)){$today++;}} echo $today; ?> </li>
        <li>Посещений сегодня: <?php $today = 0; for($ii=0;$ii<$COLVO;$ii++){if($times[$ii] >= ($time - 86400)){$today++;}} echo $today; ?> </li>
        <li>Всего посещений: <?php echo $COLVO; ?> </li>
    </ul>

            <form action="buttons/exit.php" method="POST">
        <input type="submit" name="exit" id="exit" value="Выйти">
            </form>
        <span id="comBtn">Отзывы</span>
        <span id="blBtn">Блог</span>
    <div id="comments">
        <?php
for($i=0;$i<$colvo;$i++){
    if($all[$i][4] == "true" ){
echo "<div class=\"comment active\">\n<form action=\"buttons/bad.php\" method=\"POST\">\n<input type=\"hidden\" name=\"id\" value=\"".$all[$i][0]."\">\n<span>\n<img src=\"./img/comm/".$all[$i][5]."\" alt=\"\">\n<div class=\"user\">".$all[$i][1]."</div>\n</span>\n<p>".$all[$i][2]."</p>\n<input class=\"button\" type=\"submit\" name=\"bad\" value=\"Удалить с сайта\">\n</form>\n</div>";
}
}
?>
<?php
for($i=0;$i<$colvo;$i++){
    if($all[$i][4] != "true"){
echo "<div class=\"comment\">\n
<span>\n<img src=\"./img/comm/".$all[$i][5]."\" alt=\"\">\n<div class=\"user\">".$all[$i][1]."</div>\n </span>\n
<p>".$all[$i][2]."</p>\n<form action=\"buttons/bad.php\" method=\"POST\">\n
<input class=\"button\" type=\"submit\" name = \"bad\" value=\"Удалить\">\n
<input type=\"hidden\" name=\"id\" value=\"".$all[$i][0]."\">\n
</form>\n
<form action=\"buttons/accept.php\" method=\"POST\">\n
<input class=\"button\" type=\"submit\" name = \"accept\" value=\"Добавить\">\n<input type=\"hidden\" name=\"id\" value=\"".$all[$i][0]."\">\n</form>\n</div>";
}
}
?>

    </div>


    <div id="blog">
    <form id="blogP" action="" method="post">
            Аватар: <input type="file" id="logo" name="files" value="Выбрать фото" /> <br>
            <output id="list"></output>
            <textarea name="text" id="" cols="50" rows="10" maxlength="500" placeholder="Текст статьи"></textarea> <br>
            Добавить фото: <input type="file" id="gallery" name="files" value="Выбрать фото"/> <br>
            <input id="blogSubmit" type="submit" name="done" value="Опубликовать">
    </form>
    </div>

    <style>
        body {
            position: relative;
            background-color: #272727;
        }

        ul {
            display: inline-block;
            width: 500px;
            margin-left: calc(50% - 250px);
            margin-top: 20vh;
            padding: 0;
            color: #c0c0c0;
            border-left: 1px solid #151515;
            border-right: 1px solid #151515;
            list-style-type: none;
        }

        ul li {
            display: inline-block;
            width: 100%;
            text-align: center;
            padding: 8px 0;
            border-top: 1px solid #151515;
        }

        ul li:last-child {
            border-bottom: 1px solid #151515;
        }

        #comments, #blog {
            z-index: 9999;
            display: none;
            width: 70%;
            margin: 150px 15% 15px 15%;
            padding: 0;
            opacity: 0;
        }

        #exit {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 8px;
            border: 1px solid #373737;
            background-color: #303030;
            box-shadow: 2px 4px 6px 0 #171717, -2px -4px 6px 0 #525252;
            color: #c0c0c0;
            font-weight: 600;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 15px;
        }

        #comBtn {
            display: inline-block;
            width: 100px;
            text-align: center;
            padding: 16px 32px;
            background-color: #DBDBDB;
            box-shadow: 2px 4px 8px 0 #171717, -2px -4px 8px 0 #525252;
            line-height: 24px;
            font-weight: 600;
            font-size: 24px;
            border-radius: 8px;
            position: absolute;
            left: calc(50% - 240px);
            top: 50px;
            cursor: pointer;
            z-index: 99;
        }

        #blBtn {
            display: inline-block;
            width: 100px;
            text-align: center;
            padding: 16px 32px;
            background-color: #DBDBDB;
            box-shadow: 2px 4px 8px 0 #171717, -2px -4px 8px 0 #525252;
            line-height: 24px;
            font-weight: 600;
            font-size: 24px;
            border-radius: 8px;
            position: absolute;
            left: calc(50% + 80px);
            top: 50px;
            cursor: pointer;
            z-index: 99;
        }

        form {
            display: inline-block;
        }

        .comment {
            display: inline-block;
            width: 100%;
            border-bottom: 1px solid rgb(212, 212, 212);
            box-shadow: 2px 4px 16px 0 #171717;
            margin: 20px 0;
            padding: 15px 25px;
            background-color: #fff;
            border-radius: 16px;
        }

        .active {
            background-color: rgb(204, 253, 203);
        }

        .comment * {
            display: inline-block;
        }

        .comment span {
            display: inline-block;
            width: 100%;
        }

        img {
            display: none;
            width: 80px;
            height: 80px;
            background-color: #cacaca;
            border-radius: 20px;
        }

        .button {
            display: inline-block;
            padding: 8px 16px;
            background-color: inherit;
            border: 1.5px solid rgb(240, 32, 95);
            border-radius: 8px;
            cursor: pointer;
            line-height: 20px;
            margin: 5px 25px 5px 5px;
            transition: 0.4s;
        }

        .button:hover {
            background-color: rgb(255, 189, 209);
        }


        .user {
            vertical-align: top;
            margin: 10px;
        }


        p {
            display: inline-block;
            width: 100%;
            margin-top: 15px;
        }

        
        #blogP {
            width: 400px;
            text-align: center;
            color: #fff;
        }

        #blogP * {
            margin: 8px 0;
        }

        #blogSubmit {
            display: inline-block;
            background-color: red;
            border: none;
            padding: 8px 16px;
            margin-top: 20px;
            color: #fff;
            border-radius: 12px;
            font-size: 18px;
            font-weight: bold;
        }

        @media (max-width: 768px) {

            ul{
                width: 100%;
                margin-left: 0;
                margin-top: 50vh;
            }

            #exit {
                top: 20px;
                right: 10px;
            }

            #comments {
                width: 100%;
                margin: 100px 0 0 0;
            }

            .comment {
                max-width: calc(100% - 10px);
                padding: 10px 5px;
            }

            #comBtn {
                top: 160px;
                left:calc(50% - 80px);
            }

            
            #blBtn {
                top: 240px;
                left:calc(50% - 80px);
            }
    
            #blogP, #blogP * {
                width: 100%;
            }

            #blogSubmit {
                width: 70%;
                left: 15%;
            }
        }


    </style>

    <script>
        var comS = 'hide',
        blS = 'hide',
        comBtn = document.body.querySelector('#comBtn'),
        blBtn =  document.body.querySelector('#blBtn'),
        stat = document.body.querySelector('#stat');
        if (screen.width <= '768') {
            $('#comBtn').click(function() {
                if (comS == 'hide') {
                    stat.style.display = 'none';
                    $('#comments').css('display', 'inline-block');
                    $('#blBtn').css('display', 'none');
                    comBtn.innerHTML = 'Назад';
                    $('#comBtn').css('position', 'fixed');
                    $('#comBtn').animate({'top': '10px'}, 'slow');
                    $('#comments').animate({'opacity': '1'}, 'slow');
                    comS = 'show';
                } else {
                    stat.style.display = 'inline-block';
                    $('#comments').css('display', 'none');
                    comBtn.innerHTML = 'Отзывы';
                    $('#blBtn').css('display', 'inline-block');
                    $('#comBtn').css('position', 'absolute');
                    $('#comBtn').animate({'top': '160px'}, 'slow');
                    comS = 'hide';
                }
            });

            $('#blBtn').click(function() {
                if (blS == 'hide') {
                    stat.style.display = 'none';
                    $('#blog').css('display', 'inline-block');
                    blBtn.innerHTML = 'Назад';
                    $('#comBtn').css('display', 'none');
                    $('#blBtn').css('position', 'fixed');
                    $('#blBtn').animate({'top': '10px'}, 'slow');
                    $('#blog').animate({'opacity': '1'}, 'slow');
                    blS = 'show';
                } else {
                    stat.style.display = 'inline-block';
                    $('#blog').css('display', 'none');
                    blBtn.innerHTML = 'Блог';
                    $('#comBtn').css('display', 'inline-block');
                    $('#blBtn').css('position', 'absolute');
                    $('#blBtn').animate({'top': '240px'}, 'slow');
                    blS = 'hide';
                }
            });
        } else {
            $('#comBtn').click(function() {
                if (comS == 'hide') {
                    stat.style.display = 'none';
                    $('#comments').css('display', 'inline-block');
                    comBtn.innerHTML = 'Назад';
                    $('#blBtn').css('display', 'none');
                    $('#comBtn').css('position', 'fixed');
                    $('#comBtn').animate({
                        'left': '+=160px',
                        'top': '10px'
                    }, 'slow');
                    $('#comments').animate({'opacity': '1'}, 'slow');
                    comS = 'show';
                } else {
                    stat.style.display = 'inline-block';
                    $('#blBtn').css('display', 'inline-block');
                    comBtn.innerHTML = 'Отзывы';
                    $('#comBtn').css('position', 'absolute');
                    $('#comBtn').animate({
                        'left': '-=160px',
                        'top': '50px'
                    }, 'slow');
                    $('#comments').animate({'opacity': '0'}, 'slow');
                    $('#blog').css('display', 'none');
                    comS = 'hide';
                }
            });

                $('#blBtn').click(function() {
                if (blS == 'hide') {
                    stat.style.display = 'none';
                    $('#blog').css('display', 'inline-block');
                    blBtn.innerHTML = 'Назад';
                    $('#comBtn').css('display', 'none');
                    $('#blBtn').css('position', 'fixed');
                    $('#blBtn').animate({
                        'left': '-=160px',
                        'top': '10px'
                    }, 'slow');
                    $('#blog').animate({'opacity': '1'}, 'slow');
                    blS = 'show';
                } else {
                    stat.style.display = 'inline-block';
                    $('#comBtn').css('display', 'inline-block');
                    blBtn.innerHTML = 'Блог';
                    $('#blBtn').css('position', 'absolute');
                    $('#blBtn').animate({
                        'left': '+=160px',
                        'top': '50px'
                    }, 'slow');
                    $('#blog').animate({'opacity': '0'}, 'slow');
                    $('#blog').css('display', 'none');
                    blS = 'hide';
                }
            });
        }
    </script>
</body>
</html>