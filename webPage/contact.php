<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mixteca Exterior - Contacto</title>
	<?php include 'inc/head_common.php'; ?>
</head>
<body>
	<?php include 'inc/header.php'; ?>

	<section id="title-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Registrate</h1>
				</div>
			</div>
		</div>	
	</section>

	<section id="contact">
		<div class="container">
			<div class="row">				
				<div class="col-md-7 col-md-offset-1">

					<form action="mail.php" method="POST">
						
						<div class="form-group">
							<label for="inputName">Nombre</label>
							<input name="name" type="text" class="form-control" id="inputName" placeholder="Introduce tu nombre" required>
						</div>

						<div class="form-group">
							<label for="inputLastname">Apellidos</label>
							<input name="lastname" type="text" class="form-control" id="inputLastname" placeholder="Introduce tus apellidos" required>
						</div>
						<div class="form-group">
					    	<label>Forma de identificación</label>					    	
					  	</div>
					  	<div class="checkbox">
					    	<label>
					      	<input type="radio" name="identification" value="Matricula Consular" required> Matricula consular
					    	</label>
					    	<label>
					      	<input type="radio" name="identification" value"Pasaporte" required> Pasaporte
					    	</label>
					    	<label>
					      	<input type="radio" name="identification" value="Credencial Del Elector" required> Credencial del elector
					    	</label>
					    	<label>
					      	<input type="radio" name="identification" value="Licencia De Conducir" required> Licencia de conducir
					    	</label>
					  	</div>
					  	<div class="form-group">
					    	<label for="inputID">Número de ID</label>
					    	<input name="idnumber" type="text" class="form-control" id="inputID" placeholder="Número de identificación" required>
					  	</div>
						<div class="form-group">
							<label for="inputContactNumber">Número telefónico</label>
							<input name="telephone" type="text" class="form-control" id="inputContactNumber" placeholder="Escribe tu número telefónico para comunicarnos contigo" required>							
						</div>
						<div class="form-group">
							<label for="">Estado donde radica</label>							
							<select name="city" class="form-control">
							  		<option>Alabama</option>
									<option>Alaska</option>
									<option>Arizona</option>
									<option>Arkansas</option>
									<option>California</option>
									<option>Carolina del Norte</option>
									<option>Carolina del Sur</option>
									<option>Colorado</option>
									<option>Connecticut</option>
									<option>Dakota del Norte</option>
									<option>Dakota del Sur</option>
									<option>Delaware</option>
									<option>Florida</option>
									<option>Georgia</option>
									<option>Hawái</option>
									<option>Idaho</option>
									<option>Illinois</option>
									<option>Indiana</option>
									<option>Iowa</option>
									<option>Kansas</option>
									<option>Kentucky</option>
									<option>Luisiana</option>
									<option>Maine</option>
									<option>Maryland</option>
									<option>Massachusetts</option>
									<option>Míchigan</option>
									<option>Minnesota</option>
									<option>Misisipi</option>
									<option>Misuri</option>
									<option>Montana</option>
									<option>Nebraska</option>
									<option>Nevada</option>
									<option>Nueva Jersey</option>
									<option>Nueva York</option>
									<option>Nuevo Hampshire</option>
									<option>Nuevo México</option>
									<option>Ohio</option>
									<option>Oklahoma</option>
									<option>Oregón</option>
									<option>Pensilvania</option>
									<option>Rhode Island</option>
									<option>Tennessee</option>
									<option>Texas</option>
									<option>Utah</option>
									<option>Vermont</option>
									<option>Virginia</option>
									<option>Virginia Occidental</option>
									<option>Washington</option>
									<option>Wisconsin</option>
									<option>Wyoming</option>					 
									<option>Otro</option>					 
							</select>
						</div>
						<div class="form-group">
							<label for="inputAddress">Dirección</label>							
							<textarea name="address" class="form-control" rows="3" placeholder="Escribe aquí tu dirección por favor: Calle, Número, Colonia, Ciudad" required></textarea>					    	
						</div>
									
			
						<div class="form-group">
					    	<label for="inputEmail">Correo electrónico</label>
					    	<input name="email" type="email" class="form-control" id="inputEmail" placeholder="Escribe tu correo electrónico" required>
					  	</div>

					  	<label >Datos de personas a asegurar </label>
					  	<div class="well">
					  		<div class="well">
						  		<div class="form-group">
							    	<label for="inputAdress">Nombre del asegurado 1</label>
							    	<input name="name1" type="text" class="form-control" id="inputLastname" placeholder="Introduce el nombre completo con apellidos de la persona a asegurar" required>
							  	</div>
							  	<div class="form-group">
									<label for="">Relación o parentezco con usted</label>							
									<select name="relation1" class="form-control">
									  		<option>Esposo (a)</option>
											<option>Hijo (a)</option>
											<option>Padre</option>
											<option>Madre</option>													 
									</select>
								</div>
								<div class="form-group">
									<label for="inputLastname">Dirección</label>							
									<textarea name="address1" class="form-control" rows="3" placeholder="Escribe la dirección de tu asegurado: Calle, Número, Colonia, Ciudad" required></textarea>					    	
								</div>	
							</div>	
							<div class="well">
						  		<div class="form-group">
							    	<label for="inputAdress">Nombre del asegurado 2</label>
							    	<input name="name2" type="text" class="form-control" id="inputLastname" placeholder="Introduce el nombre completo con apellidos de la persona a asegurar">
							  	</div>
							  	<div class="form-group">
									<label for="">Relación o parentezco con usted</label>							
									<select name="relation2" class="form-control">
									  		<option>Esposo (a)</option>
											<option>Hijo (a)</option>
											<option>Padre</option>
											<option>Madre</option>													 
									</select>
								</div>
								<div class="form-group">
									<label for="inputLastname">Dirección</label>							
									<textarea name="address2" class="form-control" rows="3" placeholder="Escribe la dirección de tu asegurado: Calle, Número, Colonia, Ciudad"></textarea>					    	
								</div>	
							</div>	
							<div class="well">
						  		<div class="form-group">
							    	<label for="inputAdress">Nombre del asegurado 3</label>
							    	<input name="name3" type="text" class="form-control" id="inputLastname" placeholder="Introduce el nombre completo con apellidos de la persona a asegurar">
							  	</div>
							  	<div class="form-group">
									<label for="">Relación o parentezco con usted</label>							
									<select name="relation3" class="form-control">
									  		<option>Esposo (a)</option>
											<option>Hijo (a)</option>
											<option>Padre</option>
											<option>Madre</option>													 
									</select>
								</div>
								<div class="form-group">
									<label for="inputLastname">Dirección</label>							
									<textarea name="address3" class="form-control" rows="3" placeholder="Escribe la dirección de tu asegurado: Calle, Número, Colonia, Ciudad"></textarea>					    	
								</div>	
							</div>	
							<div class="well">
						  		<div class="form-group">
							    	<label for="inputAdress">Nombre del asegurado 4</label>
							    	<input name="name4" type="text" class="form-control" id="inputLastname" placeholder="Introduce el nombre completo con apellidos de la persona a asegurar">
							  	</div>
							  	<div class="form-group">
									<label for="">Relación o parentezco con usted</label>							
									<select name="relation4" class="form-control">
									  		<option>Esposo (a)</option>
											<option>Hijo (a)</option>
											<option>Padre</option>
											<option>Madre</option>													 
									</select>
								</div>
								<div class="form-group">
									<label for="inputLastname">Dirección</label>							
									<textarea name="address4" class="form-control" rows="3" placeholder="Escribe la dirección de tu asegurado: Calle, Número, Colonia, Ciudad"></textarea>					    	
								</div>	
							</div>	
						</div>
						<button type="submit" class="btn btn-default">Registrar</button>
						<br>Nota: Si usted solicita el servicio por alguien más, favor de ponerse en contacto con nosotros mediante nuestro correo o número telefónico.
					</form>
				</div>

				<div class="col-md-4">
					<br>
					<p>
						Para mas información sobre el plan de cobertura médica puede ponerse en contacto con 
						el departamento de Servicio al Cliente a los siguientes teléfonos o correos electrónicos: 
					</p>
					<p>
						email: osoriohgto@hotmail.com<br>
						+312 772 8407 
	
					</p>
					<p>
						email: osoriorod64@gmail.com<br>
						+847 910 6928
					</p>
					
					<p>
						email: maria.herrera0710@gmail.com<br>
						+847 637 7953
					</p>
					<p>
						O en la ciudad de Huajupan de León con la<br>
						Srtia. <strong>Margarita Herrera Hernandez</strong>, en el domicilio: <br>
						<strong>Valerio Trujano No. 60, Col. Centro</strong><br>
						O de igual forma al teléfono:<br>
						<strong>953 532 1291</strong>
						
					</p>
					<p>
						De igual forma puedes realizar tu donativo mediante PayPal con el siguiente botón
					</p>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="paypal">
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
									<input type="hidden" name="business" value="OSORIOROD@HOTMAIL.COM"/>
									<input type="hidden" name="cmd" value="_xclick"/>
									<input type="hidden" name="item_name" value="01IL001"/>
									<input type="hidden" name="amount" value="25"/>
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="shipping" value="0"/>
									<input type="hidden" name="tax_rate" value="0"/>		
									<input type="image" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" alt="PayPal - The safer, easier way to pay online"/>
									<img alt="" border="0" width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif"/>
								</form>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<!--
	<section id="contactinformation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>
						Para mas información sobre el plan de seguros médicos puede ponerse en contacto con 
						El departamento de Servicio al Cliente (312) 772-8407. 
						email: osoriohgto@Hotmail.com
					</p>
				</div>
			</div>
		</div>
	</section>
	-->

	<!--
	<div class="container">
		<div class="row">
			<div class="col-ms-12">
				<div class="paypal">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="business" value="OSORIOROD@HOTMAIL.COM"/>
						<input type="hidden" name="cmd" value="_xclick"/>
						<input type="hidden" name="item_name" value="01IL001"/>
						<input type="hidden" name="amount" value="25"/>
						<input type="hidden" name="currency_code" value="USD"/>
						<input type="hidden" name="shipping" value="0"/>
						<input type="hidden" name="tax_rate" value="0"/>		
						<input type="image" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" alt="PayPal - The safer, easier way to pay online"/>
						<img alt="" border="0" width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif"/>
					</form>
				</div>
			</div>
		</div>
	</div>
	-->

	<?php include 'inc/footer.php'; ?>
	<?php include 'inc/footer_common.php'; ?>
</body>
</html>