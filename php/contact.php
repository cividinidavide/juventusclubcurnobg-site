<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// per inserire più destinatari è necessario inserire gli indirizzi separati da una virgola
	// imposto le condizioni del form
	if ($name != "" && $email != "" && $message != "") {
		header("location: ../sendmail.html"); // apre il file sendmail.html
		// imposto il sistema di invio
		$destinatario = "juventusclubdoccurno.bg@gmail.com";
		$oggetto = "Richiesta Informazioni (Juventus Club Curno BG)";
		$corpo = "Questo messaggio è stato inviato dal modulo di richiesta informazioni sul sito http://www.juventusclubcurnobg.it \n
			      Nome: $name\n 
				  E-mail: $email\n
				  Messaggio: $message\n";
		mail($destinatario, $oggetto, $corpo);
	} else {
	    header("location: ../error.html"); // apre il file error.html
	}
?>