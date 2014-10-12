<?php

$name = $_POST['validate-text'];
$email = $_POST['validate-email'];
$messagetext= $_POST['validate-length'];
$message = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Письмо с сайта createsport.ru</title><body>';
$message .= '<h3>От:</h3>'.$name.'<h3>E-mail:</h3>'.$email.'<h3>Сообщение:</h3>'.$messagetext;

$message .= '</body></html>';

$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=utf-8"."\r\n"; // можно отправлять письмо в html
$headers .= "From: wd.honcharovs.com"."\r\n";

mail('info@honcharovs.com', 'Письмо с моего сайта wd.honcharovs.com', $message, $headers);

header("location: ".$_SERVER['HTTP_REFERER']);

?>
