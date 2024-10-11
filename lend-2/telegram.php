<?php
    $name = $_POST['user_name'];
    $phone = $_POST['user_phone'];
    $token = "7642175209:AAG9m2V_7ZqzzVsXnuA0eYloxrdjlxrz1KE";
    $chat_id = "-1002265424921";

    $arr = array (
        'Імя клієнта: ' => $name,
        'Телефон: ' => $phone,
    );

    $txt = "";
    foreach($arr as $key => $value) {
        $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

    if ($sendToTelegram) {
        echo '<h1 class="success">Дякуємо за відправку вашого повідомлення!</h1>';
    } else {
        header('Location: thank-you.html');
    }
?>
