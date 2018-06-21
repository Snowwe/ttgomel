<!--<!doctype html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>-->
<!--    <title>Ваше сообщение успешно отправлено</title>-->
<!--</head>-->
<!---->
<!--<body>-->

<?php
$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";


if (!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail'])
    and !empty($_POST['message'])) {
    $to = "ttgomel@mail.ru"; // email получателя данных из формы.
    $subject = "Письмо с ttgomel.by"; // тема полученного email
    $name = trim(strip_tags($_POST['name']));//полученное из формы name
    $phone = trim(strip_tags($_POST['phone']));//полученное из формы phone
    $mail = trim(strip_tags($_POST['mail']));//полученное из формы email
    $message = trim(strip_tags($_POST['message']));//полученное из формы сообщение
    $headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента

    //отправляет получателю на емайл значения переменных
    mail($to
        , $subject
        , 'Вам написал: ' . $name . '<br />Его номер: ' . $phone . '<br />Его почта: ' . $mail . '<br />  Его сообщение: ' . $message
        , $headers);

    echo "Ваше сообщение успешно отправлено!<Br> Если Вы корректно указали Вашу контактную информацию, то Вы получите ответ в ближайшее время<Br> $back";
    $_GET['name'] = "";
    exit;
} else {
    echo "Для отправки сообщения заполните все поля! $back";
    exit;
}


//$message = "Ваше имя: " . $_POST['name'] . "<br>";//присвоить переменной значение, полученное из формы name=name
//$message .= "E-mail: " . $_POST['email'] . "<br>"; //полученное из формы name=email
//$message .= "Номер телефона: " . $_POST['phone'] . "<br>"; //полученное из формы name=phone
//$message .= "Сообщение: " . $_POST['message'] . "<br>"; //полученное из формы name=message
//$headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
//$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
//mail($to, $tema, $message, $headers);

?>
<!--</body>-->
<!--</html>-->