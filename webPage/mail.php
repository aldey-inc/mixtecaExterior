<?php

	
	$fp = fopen("index.txt", "r+");
	
	$count = fgets($fp);

	fclose($fp);

	$fp = fopen("index.txt","w");

	fputs($fp,$count+1);
	fclose($fp);

	$destino ="yuliemalavez@outlook.com";
	$asunto = "Nueva persona registrada";


	$comentario = "
		No. Registro: $count
		Nombre: $_POST[name]
		Apellido: $_POST[lastname]
		Tipo de Identificacion: $_POST[identification]
		Numero de ID: $_POST[idnumber]
		Telefono: $_POST[telephone]
		Ciudad: $_POST[city]
		Direccion: $_POST[address]
		Correo electronico: $_POST[email]
		
		=========================================================
		
		Datos del primer asegurado

		=========================================================
		
			Nombre: $_POST[name1]
			Parentesco: $_POST[relation1]
			Direccion: $_POST[address1]


		=========================================================
		
		Datos del segundo asegurado

		=========================================================

			Nombre: $_POST[name2]
			Parentesco: $_POST[relation2]
			Direccion: $_POST[address2]

		=========================================================
		
		Datos del tercer asegurado

		=========================================================
			
			Nombre: $_POST[name3]
			Parentesco: $_POST[relation3]
			Direccion: $_POST[address3]

		=========================================================
		
		Datos del cuarto asegurado

		=========================================================
			
			Nombre: $_POST[name4]
			Parentesco: $_POST[relation4]
			Direccion: $_POST[address4]
	";

	$header = 'From: ' .$_POST["email"];
	
	mail($destino,$asunto,$comentario,$header);

	echo "Mensaje Enviado";

	/*
	$destino= $_POST['email'];
	$asunto= "comentario";
	
	$comentario="
		Email: $_POST[email]
		Comentario: $_POST[com]
	";

	$header = 'From: ' .$_POST["email"];

	mail($destino,$asunto,$comentario,$header);

	echo "Mensaje Enviado";
	*/
?>