<?php
$gid = '195088505'; // ID группы
//Строка для подтверждения адреса сервера из настроек Callback API
$confirmationToken = 'fbf6152c';

//Ключ доступа сообщества
$token = '253e3a80b7ad484f346b4ae310185e3355c4ef35c1f47217d47660fa60baa82a668bd91ce89358db52814';

// Secret key
$secretKey = 'secretkey123';

//Получаем и декодируем уведомление
$data = json_decode(file_get_contents('php://input'));

// проверяем secretKey
if(strcmp($data->secret, $secretKey) !== 0 && strcmp($data->type, 'confirmation') !== 0)
    return;

//Проверяем, что находится в поле "type"
switch ($data->type) {
    //Если это уведомление для подтверждения адреса сервера...
    case 'confirmation':
        //...отправляем строку для подтверждения адреса
        echo $confirmationToken;
        break;

    // Если это уведомление о вступлении в группу
    case 'group_join':
    $tok = "7a6093ffd34aa2130fb1c79ab57732329bce523e49d67d5bad6c1d738d803737e9ba015d201315a8b44b0";
     $request_params = array(
     	'group_id' => "195088505",
            'user_id' => $data->object->user_id,
            'access_token' => $tok,
            'v'=> "5.103"
        );

        $get_params = http_build_query($request_params);

        file_get_contents('https://api.vk.com/method/groups.approveRequest?'.$get_params);

        //Возвращаем "ok" серверу Callback API
        echo('ok');

        break;
}
?>