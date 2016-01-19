<?php
	$destino= $_POST['email'];
	$asunto= "comentario";
	
	$comentario="
		Email: $_POST[email]
		Comentario: $_POST[com]
	";

	$header = 'From: ' .$_POST["email"];

	mail($destino,$asunto,$comentario,$header);

	echo "Mensaje Enviado";

?>