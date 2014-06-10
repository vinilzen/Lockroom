<?php

	if ($_POST['name'] && $_POST['phone'] && $_POST['mail'] && $_POST['inf'] && $_POST['title_quest'] ) {

		$to      = 'marchukilya@gmail.com, ilya978@gmail.com';
		$subject = 'Lockroom - '.$_POST['inf'];
		$message = 'Name - '.$_POST["name"].'; '.
				   'Phone - '.$_POST["phone"].'; '.
				   'Mail - '.$_POST["mail"].'; '.
				   'Quest - '.$_POST["title_quest"];

		// $headers = 'From: webmaster@example.com' . "\r\n" .
		//     'Reply-To: webmaster@example.com' . "\r\n" .
		//     'X-Mailer: PHP/' . phpversion();
		// var_dump($to, $subject, $message);
		// die;

		mail($to, $subject, $message);

		echo 1;

		die;

	} else {
		echo 'Не полные данные!';
		die;
	}

?>