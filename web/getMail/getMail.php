<?
/*  РАБОТАЕТ */
$message = "";

if ($_POST['zayavka']) {
	
	$subject = "Новая анкета!"; 

	// Обязательные параметры
	if ($_POST['imya']) {
		$message .= "Имя: {$_POST['imya']}\r\n\r\n";
	}
	if ($_POST['vozrast']) {
		$message .= "Возраст: {$_POST['vozrast']}\r\n\r\n";
	}
	if ($_POST['projivanie']) {
		$message .= "Место проживания: {$_POST['projivanie']}\r\n\r\n";
	}
	if ($_POST['dannie']) {
		$message .= "Данные для связи: {$_POST['dannie']}\r\n\r\n";
	}

	// Необязательные параметры
	if ($_POST['obrazovanie']) {
		$message .= "Образование: {$_POST['obrazovanie']}\r\n\r\n";
	}
	if ($_POST['profesiya']) {
		$message .= "Профессия: {$_POST['profesiya']}\r\n\r\n";
	}
	if ($_POST['deti']) {
		$message .= "Дети: {$_POST['deti']}\r\n\r\n";
	}
	if ($_POST['pereezd']) {
		$message .= "Возможность переезда: {$_POST['pereezd']}\r\n\r\n";
	}

	// Фото, тоже обязательно
	if ($_FILES['file']['name']) {
		$расширение = strrchr($_FILES['file']['name'], ".");		
		$имя = uniqid().$расширение;				
		
		if ($_SERVER['SERVER_NAME'] == "f0448955.xsph.ru") {
			$путь_к_файлу_на_sprinthost = "/home/f0448955/domains/f0448955.xsph.ru/public_html/photos/".$имя;
		}elseif ($_SERVER['SERVER_NAME'] == "7yanika-rostov.ru") {
			$путь_к_файлу_на_sprinthost = "/home/a0033480/domains/7yanika-rostov.ru/public_html/photos/".$имя;
		}
				
		$загруженый_файл = $_FILES['file']['tmp_name'];		
		$результат = move_uploaded_file($загруженый_файл, $путь_к_файлу_на_sprinthost); 		
		if ($результат) {
			$ссылка = "http://".$_SERVER['SERVER_NAME']."/photos/".$имя;
			$message .= "Ссылка на фото:\r\n{$ссылка}";
		}
	}
	
	$text = "Заявка отправлена!";

}elseif ($_POST['message']) {

	$subject = "Новое сообщение!"; 

	$message .= $_POST['msg'];
	
	$text = "Сообщение отправлено!";
	
}

//$to  = "ya13th@mail.ru"; 
$to  = "oksana7yanika@mail.ru"; 

// если сообщение длиннее 70ти символов
$message = wordwrap($message, 70, "\r\n");

$headers  = "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "From: Семьяника <admin@7yanika-rostov.ru>\r\n";


if (mail($to, $subject, $message, $headers)) print $text;
else print "Не смог отправить.";


?>


<?php /* отправка текста с иноформацией от кого
$to  = "ya13th@mail.ru"; 

$subject = "Заголовок письма"; 

$message = 'Line 1\r\nLine 2\r\nLine 3';

$headers  = "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "From: От кого письмо <from@example.com>\r\n"; 
$headers .= "Reply-To: reply-to@example.com\r\n"; 

mail($to, $subject, $message, $headers); 

*/
?>


<?php/* отправка текста
// Сообщение
$message = "Line 1\r\nLine 2\r\nLine 3";

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Отправляем
mail('ya13th@mail.ru', 'My Subject', $message);
*/
?>


<?/* Не работает

$mailTo = "ya13th@mail.ru";
$message = 'Line 1\r\nLine 2\r\nLine 3';
$subject = "Your Subject";
$fromMail = "your@emialaddress.com";
$fromName = "from sender";
$replyTo = "no-reply";
//$filePath = "/home/f0448955/domains/f0448955.xsph.ru/public_html/getMail/Untitled.bin";

$LE  = "\r\n";
$uid = md5(uniqid(time()));
if ($filePath !== NULL && file_exists($filePath)) $withAttachment = true;

if($withAttachment){
	$fileName   = basename($filePath);
	$fileSize   = filesize($filePath);
	$handle     = fopen($filePath, "r");
	$content    = fread($handle, $fileSize);
	fclose($handle);
	$content = chunk_split(base64_encode($content));
}

$header = "From: ".$fromName." <".$fromMail.">".$LE;
$header .= "Reply-To: ".$replyTo.$LE;
$header .= "MIME-Version: 1.0".$LE;
$header .= 'Content-Type: multipart/mixed; boundary=\"'.$uid.'\"'.$LE.$LE;
$header .= "This is a multi-part message in MIME format".$LE;
$header .= "--".$uid.$LE;
$header .= "Content-type:text/plain; charset=UTF-8".$LE;
$header .= "Content-Transfer-Encoding: 7bit".$LE.$LE;
$header .= $message.$LE.$LE;

if($withAttachment){
	$header .= "--".$uid.$LE;
	$header .= 'Content-Type: application/octet-stream; name=\"'.$fileName.'\"'.$LE;
	$header .= "Content-Transfer-Encoding: base64".$LE;
	$header .= 'Content-Disposition: attachment; filename=\"'.$fileName.'\"'.$LE.$LE;
	$header .= $content.$LE.$LE;
	$header .= "--".$uid."--";
}

if (mail($mailTo, $subject, "", $header)) print "отправил";
else print "Не отправил";
*/
?>



<?php /* Не работает
$subject = "тема письма"; 
$message ="Текст сообщения"; 
// текст сообщения, здесь вы можете вставлять таблицы, рисунки, заголовки, оформление цветом и т.п.
$filename = "Untitled.bin";
// название файла
$filepath = "http://f0448955.xsph.ru/getMail/Untitled.bin";
// месторасположение файла

//исьмо с вложением состоит из нескольких частей, которые разделяются разделителем

$boundary = "--".md5(uniqid(time())); 
// генерируем разделитель

$mailheaders = "MIME-Version: 1.0;\r\n"; 
$mailheaders .= 'Content-Type: multipart/mixed; boundary=\"'.$boundary.'\"'."\r\n"; 
// разделитель указывается в заголовке в параметре boundary 

$mailheaders .= "From: {$user_email} <{$user_email}>\r\n"; 
$mailheaders .= "Reply-To: {$user_email}\r\n"; 

$multipart = "--{$boundary}\r\n"; 
$multipart .= "Content-Type: text/html; charset=windows-1251\r\n";
$multipart .= "Content-Transfer-Encoding: base64\r\n";    
$multipart .= "\r\n";
$multipart .= chunk_split(base64_encode(iconv("utf8", "windows-1251", $message)));
// первая часть само сообщение
 
// Закачиваем файл 
	$fp = fopen($filepath,"r"); 
		if (!$fp) 
		{ 
			print "Не удается открыть файл22"; 
			exit(); 
		} 
$file = fread($fp, filesize($filepath)); 
fclose($fp); 
// чтение файла


$message_part = "\r\n--{$boundary}\r\n"; 
$message_part .= 'Content-Type: application/octet-stream; name=\"'.$filename.'\"'."\r\n";  
$message_part .= "Content-Transfer-Encoding: base64\r\n"; 
$message_part .= 'Content-Disposition: attachment; filename=\"'.$filename.'\"'."\r\n"; 
$message_part .= "\r\n";
$message_part .= chunk_split(base64_encode($file));
$message_part .= "\r\n--{$boundary}--\r\n";
// второй частью прикрепляем файл, можно прикрепить два и более файла

$multipart .= $message_part;

if (mail($to,$subject,$multipart,$mailheaders)) print "отправил";
else print "Не отправил";
// отправляем письмо 

*/
?>

<?php/* не работает
echo '...<br><br>';

include_once '../a_conect.php';

echo '...<br><br>';

$емаил = "ya13th@mail.ru";
$body = "Здравствуйте, проверка связи!";
$ответное_сообщение = "Письмо отправленно.";

echo '...<br><br>';

include_once 'PHPMailer.php';

echo '...<br><br>';

$mail = new PHPMailer;

echo '...<br><br>';

$mail->isSMTP();                      // Set mailer to use SMTP

echo '...<br><br>';

$mail->Host = $smtp_server;      // Specify main and backup SMTP servers

echo '...<br><br>';

$mail->Port = $smtp_port;
$mail->SMTPAuth = true;               // Enable SMTP authentication
$mail->Username = $smtp_login;   // SMTP username
$mail->Password = $smtp_pass;    // SMTP password
$mail->SMTPSecure = 'tls';            // Enable encryption, only 'tls' is accepted

$mail->CharSet = "utf-8";
$mail->IsHTML(true); 

$mail->From = 'prizmarket@sibnet.ru';
$mail->FromName = 'PRIZMarket';
$mail->addAddress($емаил);  // добавить получателя

$mail->WordWrap = 50;                 // автоматический перенос символов

$mail->Subject = 'Регистрация';
$mail->Body    = $body;

echo '...<br><br>';

if(!$mail->send()) {	
    echo 'Не смог отправить сообщение на почту.';
    echo 'Ошибка: ' . $mail->ErrorInfo;
} else {

echo '...<br><br>';

    echo $ответное_сообщение;
}

echo '9...<br><br>';
*/
?>
