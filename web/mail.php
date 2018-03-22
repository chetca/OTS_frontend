<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php 
 
$sendto   = "info@biletavto.ru";
$username = $_POST['guestbook-name'];
$usermail = $_POST['guestbook-email'];
$usertext = $_POST['guestbook-text'];
 
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта Оператор Транспортных Систем</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Текст:</strong> ".$usertext."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if($username != "" && $usertext != "" && $usermail != "") {
    @mail($sendto, $subject, $msg, $headers);
    echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
}
else {
    echo "PHP ERROR";
}
 
?>