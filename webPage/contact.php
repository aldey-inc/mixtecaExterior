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
				
					<form>
						<div class="form-group">
							<label for="">Marque el que pertenezca</label>							
							<select class="form-control">
							  <option>Nombre suyo</option>
							  <option>Nombre de persona asegurada</option>							 
							</select>
						</div>
						<div class="form-group">
							<label for="inputName">Nombre</label>
							<input type="text" class="form-control" id="inputName" placeholder="Introduce tu nombre o el del beneficiario">
						</div>

						<div class="form-group">
							<label for="inputLastname">Apellidos</label>
							<input type="text" class="form-control" id="inputLastname" placeholder="Introduce tus apellidos o los del beneficiario">
						</div>

						<div class="form-group">
							<label for="inputContactNumber">Número de contacto</label>
							<input type="text" class="form-control" id="inputContactNumber" placeholder="Escribe tu número telefónico para comunicarnos contigo">
						</div>			
			
						<div class="form-group">
					    	<label for="inputEmail">Correo electrónico</label>
					    	<input type="email" class="form-control" id="inputEmail" placeholder="Escribe tu correo electrónico">
					  	</div>
					  	<div class="form-group">
					    	<label>Forma de identificación</label>					    	
					  	</div>
					  	<div class="checkbox">
					    	<label>
					      	<input type="checkbox"> Matricula consular
					    	</label>
					    	<label>
					      	<input type="checkbox"> Pasaporte
					    	</label>
					    	<label>
					      	<input type="checkbox"> Credencial del elector
					    	</label>
					    	<label>
					      	<input type="checkbox"> Licencia de conducir
					    	</label>
					  	</div>
					  	<div class="form-group">
					    	<label for="inputID">Número de ID</label>
					    	<input type="text" class="form-control" id="inputID" placeholder="Número de identificación">
					  	</div>
					  	<div class="form-group">
					    	<label for="inputAdress">Direccion del asegurado</label>
					    	<textarea class="form-control" rows="3" placeholder="Escribe la dirección del asegurado"></textarea>					    	
					  	</div>
						
						<div class="form-group">
					    	<label for="inputRelation">Relación con usted</label>
					    	<textarea class="form-control" rows="3" placeholder="Escribe el tipo de relación que tiene con el asegurado"></textarea>					    	
					  	</div>

						<div class="form-group">
					    	<label for="inputRelation">Si usted solicita servicios por alguien más favor de detallar su identidad</label>
					    	<textarea class="form-control" rows="3" placeholder="Escribe el detale de tu identidad"></textarea>					    	
					  	</div>				
					  	<button type="submit" class="btn btn-default">Registrar</button>
					</form>
				</div>

				<div class="col-md-4">
					<br>
					<p>
						Para mas información sobre el plan de seguros médicos puede ponerse en contacto con 
						el departamento de Servicio al Cliente 
					</p>
					<p>
						(312) 772-8407 <br>
						email: osoriorod@hotmail.com
					</p>

					<p>
						O realiza tu donativo mediante PayPal con el siguiente botón
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