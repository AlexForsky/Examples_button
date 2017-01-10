<meta http-equiv='refresh' content='5'; url='index.html' charset="UTF-8"></meta>
<?php

$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$error) {
		$address = "primer@example.ru";
		$mes = "Имя: ".$name."\n\nТема: "Заявка на консультацию по ИТС"\n\nСообщение: "Заявка на консультацию по ИТС"\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>