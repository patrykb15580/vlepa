<?php
	$to      = 'patrykb15580@gmail.com';
	$subject = 'Zapytanie ze strony Fotobum.pl';
	$message = 'Imię i nazwisko: '.$_POST['name'].'<br /><br />'.$_POST['message'];
	
	$headers = 'From: no-reply@powiadomienia.pri.pl' . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'Reply-To: '. $_POST['email'] . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();

	if (!mail($to, $subject, $message, $headers)) {
		$status = '?mail=error';
	} else {
		$status = "?mail=sended";
	}

	header('Location: /'.$status);
?>
