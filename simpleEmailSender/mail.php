<?php

	//Принимаем постовые данные
	$u_name=$_POST['username'];
	$u_email=$_POST['useremail'];
	$u_message=$_POST['usermessage'];

	//Тут указываем на какой ящик посылать письмо
	$to = "tomahowk.go@gmail.com";

	//Далее идет тема и само сообщение
	// Тема письма
	$title = "Заявка с сайта";
	// Сообщение письма
	$message = "
	Имя пользователя: ".htmlspecialchars($u_name)."<br>
	Почта: <a href='#'>".htmlspecialchars($u_email)."</a>
	<br>Коментарий:<br>".htmlspecialchars($u_message);

	// Отправляем письмо при помощи функции mail();
	$headers = "From: test.sl <test@test.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $title, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thanks.html');
	exit();
?>