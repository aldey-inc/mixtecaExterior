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
							<label for="gender">Sexo</label>				  	
						</div>

						<div class="checkbox">
					    	<label>
					      	<input type="radio" name="gender" value="Hombre" required> Hombre
					    	</label>
					    	<label>
					      	<input type="radio" name="gender" value"Mujer" required> Mujer
					    	</label>					    
					  </div>

						<div class="form-group">
							<label for="birthday">Fecha de Nacimiento</label>
							<select name="day" class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							  <option>6</option>
							  <option>7</option>
							  <option>8</option>
							  <option>9</option>
							  <option>10</option>
							  <option>11</option>
							  <option>12</option>
							  <option>13</option>
							  <option>14</option>
							  <option>15</option>
							  <option>16</option>
							  <option>17</option>
							  <option>18</option>
							  <option>19</option>
							  <option>20</option>
							  <option>21</option>
							  <option>22</option>
							  <option>23</option>
							  <option>24</option>
							  <option>25</option>
							  <option>26</option>
							  <option>27</option>
							  <option>28</option>
							  <option>29</option>
							  <option>30</option>
							  <option>31</option>
							</select>
							<select name="month" class="form-control">
							  <option>Enero</option>
							  <option>Febrero</option>
							  <option>Marzo</option>
							  <option>Abril</option>
							  <option>Mayo</option>
							  <option>Junio</option>
							  <option>Julio</option>
							  <option>Agosto</option>
							  <option>Septiembre</option>
							  <option>Octubre</option>
							  <option>Noviembre</option>
							  <option>Diciembre</option>							  
							</select>
							<select name="year" class="form-control">
							  <option>1920</option>
							  <option>1921</option>
							  <option>1922</option>
							  <option>1923</option>
							  <option>1924</option>
							  <option>1925</option>
							  <option>1926</option>
							  <option>1927</option>
							  <option>1928</option>
							  <option>1929</option>							  
							  <option>1930</option>
							  <option>1931</option>
							  <option>1932</option>
							  <option>1933</option>
							  <option>1934</option>
							  <option>1935</option>
							  <option>1936</option>
							  <option>1937</option>
							  <option>1938</option>
							  <option>1939</option>
								<option>1940</option>
							  <option>1941</option>
							  <option>1942</option>
							  <option>1943</option>
							  <option>1944</option>
							  <option>1945</option>
							  <option>1946</option>
							  <option>1947</option>
							  <option>1948</option>
							  <option>1949</option>
							  <option>1950</option>
							  <option>1951</option>
							  <option>1952</option>
							  <option>1953</option>
							  <option>1954</option>
							  <option>1955</option>
							  <option>1956</option>
							  <option>1957</option>
							  <option>1958</option>
							  <option>1959</option>
							  <option>1960</option>
							  <option>1961</option>
							  <option>1962</option>
							  <option>1963</option>
							  <option>1964</option>
							  <option>1965</option>
							  <option>1966</option>
							  <option>1967</option>
							  <option>1968</option>
							  <option>1969</option>
							  <option>1970</option>
							  <option>1971</option>
							  <option>1972</option>
							  <option>1973</option>
							  <option>1974</option>
							  <option>1975</option>
							  <option>1976</option>
							  <option>1977</option>
							  <option>1978</option>
							  <option>1979</option>
							  <option>1980</option>
							  <option>1981</option>
							  <option>1982</option>
							  <option>1983</option>
							  <option>1984</option>
							  <option>1985</option>
							  <option>1986</option>
							  <option>1987</option>
							  <option>1988</option>
							  <option>1989</option>
							  <option>1990</option>
							  <option>1991</option>
							  <option>1992</option>
							  <option>1993</option>
							  <option>1994</option>
							  <option>1995</option>
							  <option>1996</option>
							  <option>1997</option>
							  <option>1998</option>
							  <option>1999</option>
							  <option>2000</option>
							  <option>2001</option>
							  <option>2002</option>
							  <option>2003</option>
							  <option>2004</option>
							  <option>2005</option>
							  <option>2006</option>
							  <option>2007</option>
							  <option>2008</option>
							  <option>2009</option>
							  <option>2010</option>
							  <option>2011</option>
							  <option>2012</option>
							  <option>2013</option>
							  <option>2014</option>
							  <option>2015</option>
							  <option>2016</option>
							</select>
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

					  	<label>Datos de personas a asegurar </label>
					  	<div class="well">
					  		<div class="well">
						  		<div class="form-group">
							    	<label for="inputAdress">Nombre del asegurado 1</label>
							    	<input name="name1" type="text" class="form-control" id="inputLastname" placeholder="Introduce el nombre completo con apellidos de la persona a asegurar" required>
							  	</div>

							  	<div class="form-group">
										<label for="gender1">Sexo</label>										

										<div class="checkbox">
									    	<label>
									      	<input type="radio" name="gender1" value="Hombre" required> Hombre
									    	</label>
									    	<label>
									      	<input type="radio" name="gender1" value"Mujer" required> Mujer
									    	</label>					    
									  </div>
								  </div>
							  	
							  	<div class="form-group">
										<label for="birthday1">Fecha de Nacimiento</label>
										<select name="day1" class="form-control">
										  <option>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										  <option>6</option>
										  <option>7</option>
										  <option>8</option>
										  <option>9</option>
										  <option>10</option>
										  <option>11</option>
										  <option>12</option>
										  <option>13</option>
										  <option>14</option>
										  <option>15</option>
										  <option>16</option>
										  <option>17</option>
										  <option>18</option>
										  <option>19</option>
										  <option>20</option>
										  <option>21</option>
										  <option>22</option>
										  <option>23</option>
										  <option>24</option>
										  <option>25</option>
										  <option>26</option>
										  <option>27</option>
										  <option>28</option>
										  <option>29</option>
										  <option>30</option>
										  <option>31</option>
										</select>
										<select name="month1" class="form-control">
										  <option>Enero</option>
										  <option>Febrero</option>
										  <option>Marzo</option>
										  <option>Abril</option>
										  <option>Mayo</option>
										  <option>Junio</option>
										  <option>Julio</option>
										  <option>Agosto</option>
										  <option>Septiembre</option>
										  <option>Octubre</option>
										  <option>Noviembre</option>
										  <option>Diciembre</option>							  
										</select>
										<select name="year1" class="form-control">
										  <option>1920</option>
										  <option>1921</option>
										  <option>1922</option>
										  <option>1923</option>
										  <option>1924</option>
										  <option>1925</option>
										  <option>1926</option>
										  <option>1927</option>
										  <option>1928</option>
										  <option>1929</option>							  
										  <option>1930</option>
										  <option>1931</option>
										  <option>1932</option>
										  <option>1933</option>
										  <option>1934</option>
										  <option>1935</option>
										  <option>1936</option>
										  <option>1937</option>
										  <option>1938</option>
										  <option>1939</option>
											<option>1940</option>
										  <option>1941</option>
										  <option>1942</option>
										  <option>1943</option>
										  <option>1944</option>
										  <option>1945</option>
										  <option>1946</option>
										  <option>1947</option>
										  <option>1948</option>
										  <option>1949</option>
										  <option>1950</option>
										  <option>1951</option>
										  <option>1952</option>
										  <option>1953</option>
										  <option>1954</option>
										  <option>1955</option>
										  <option>1956</option>
										  <option>1957</option>
										  <option>1958</option>
										  <option>1959</option>
										  <option>1960</option>
										  <option>1961</option>
										  <option>1962</option>
										  <option>1963</option>
										  <option>1964</option>
										  <option>1965</option>
										  <option>1966</option>
										  <option>1967</option>
										  <option>1968</option>
										  <option>1969</option>
										  <option>1970</option>
										  <option>1971</option>
										  <option>1972</option>
										  <option>1973</option>
										  <option>1974</option>
										  <option>1975</option>
										  <option>1976</option>
										  <option>1977</option>
										  <option>1978</option>
										  <option>1979</option>
										  <option>1980</option>
										  <option>1981</option>
										  <option>1982</option>
										  <option>1983</option>
										  <option>1984</option>
										  <option>1985</option>
										  <option>1986</option>
										  <option>1987</option>
										  <option>1988</option>
										  <option>1989</option>
										  <option>1990</option>
										  <option>1991</option>
										  <option>1992</option>
										  <option>1993</option>
										  <option>1994</option>
										  <option>1995</option>
										  <option>1996</option>
										  <option>1997</option>
										  <option>1998</option>
										  <option>1999</option>
										  <option>2000</option>
										  <option>2001</option>
										  <option>2002</option>
										  <option>2003</option>
										  <option>2004</option>
										  <option>2005</option>
										  <option>2006</option>
										  <option>2007</option>
										  <option>2008</option>
										  <option>2009</option>
										  <option>2010</option>
										  <option>2011</option>
										  <option>2012</option>
										  <option>2013</option>
										  <option>2014</option>
										  <option>2015</option>
										  <option>2016</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Relación o parentezco con usted</label>							
										<select name="relation1" class="form-control">												
												<option>Seleccione si es el caso</option>
										  	<option>Esposo (a)</option>
												<option>Hijo (a)</option>
												<option>Padre</option>
												<option>Madre</option>											 
										</select>
									</div>
									<div class="form-group">
										<label for="">Otro tipo de parentezco con usted</label>							
										<select name="otherRelation1" class="form-control">
												<option>Seleccione si es el caso</option>
										  	<option>Hermano (a)</option>
												<option>Primo (a)</option>
												<option>Abuelito (a)</option>												
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
										<label for="gender2">Sexo</label>										

										<div class="checkbox">
									    	<label>
									      	<input type="radio" name="gender2" value="Hombre" required> Hombre
									    	</label>
									    	<label>
									      	<input type="radio" name="gender2" value"Mujer" required> Mujer
									    	</label>					    
									  </div>
								  </div>
							  	<div class="form-group">
										<label for="birthday2">Fecha de Nacimiento</label>
										<select name="day2" class="form-control">
										  <option>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										  <option>6</option>
										  <option>7</option>
										  <option>8</option>
										  <option>9</option>
										  <option>10</option>
										  <option>11</option>
										  <option>12</option>
										  <option>13</option>
										  <option>14</option>
										  <option>15</option>
										  <option>16</option>
										  <option>17</option>
										  <option>18</option>
										  <option>19</option>
										  <option>20</option>
										  <option>21</option>
										  <option>22</option>
										  <option>23</option>
										  <option>24</option>
										  <option>25</option>
										  <option>26</option>
										  <option>27</option>
										  <option>28</option>
										  <option>29</option>
										  <option>30</option>
										  <option>31</option>
										</select>
										<select name="month2" class="form-control">
										  <option>Enero</option>
										  <option>Febrero</option>
										  <option>Marzo</option>
										  <option>Abril</option>
										  <option>Mayo</option>
										  <option>Junio</option>
										  <option>Julio</option>
										  <option>Agosto</option>
										  <option>Septiembre</option>
										  <option>Octubre</option>
										  <option>Noviembre</option>
										  <option>Diciembre</option>							  
										</select>
										<select name="year2" class="form-control">
										  <option>1920</option>
										  <option>1921</option>
										  <option>1922</option>
										  <option>1923</option>
										  <option>1924</option>
										  <option>1925</option>
										  <option>1926</option>
										  <option>1927</option>
										  <option>1928</option>
										  <option>1929</option>							  
										  <option>1930</option>
										  <option>1931</option>
										  <option>1932</option>
										  <option>1933</option>
										  <option>1934</option>
										  <option>1935</option>
										  <option>1936</option>
										  <option>1937</option>
										  <option>1938</option>
										  <option>1939</option>
											<option>1940</option>
										  <option>1941</option>
										  <option>1942</option>
										  <option>1943</option>
										  <option>1944</option>
										  <option>1945</option>
										  <option>1946</option>
										  <option>1947</option>
										  <option>1948</option>
										  <option>1949</option>
										  <option>1950</option>
										  <option>1951</option>
										  <option>1952</option>
										  <option>1953</option>
										  <option>1954</option>
										  <option>1955</option>
										  <option>1956</option>
										  <option>1957</option>
										  <option>1958</option>
										  <option>1959</option>
										  <option>1960</option>
										  <option>1961</option>
										  <option>1962</option>
										  <option>1963</option>
										  <option>1964</option>
										  <option>1965</option>
										  <option>1966</option>
										  <option>1967</option>
										  <option>1968</option>
										  <option>1969</option>
										  <option>1970</option>
										  <option>1971</option>
										  <option>1972</option>
										  <option>1973</option>
										  <option>1974</option>
										  <option>1975</option>
										  <option>1976</option>
										  <option>1977</option>
										  <option>1978</option>
										  <option>1979</option>
										  <option>1980</option>
										  <option>1981</option>
										  <option>1982</option>
										  <option>1983</option>
										  <option>1984</option>
										  <option>1985</option>
										  <option>1986</option>
										  <option>1987</option>
										  <option>1988</option>
										  <option>1989</option>
										  <option>1990</option>
										  <option>1991</option>
										  <option>1992</option>
										  <option>1993</option>
										  <option>1994</option>
										  <option>1995</option>
										  <option>1996</option>
										  <option>1997</option>
										  <option>1998</option>
										  <option>1999</option>
										  <option>2000</option>
										  <option>2001</option>
										  <option>2002</option>
										  <option>2003</option>
										  <option>2004</option>
										  <option>2005</option>
										  <option>2006</option>
										  <option>2007</option>
										  <option>2008</option>
										  <option>2009</option>
										  <option>2010</option>
										  <option>2011</option>
										  <option>2012</option>
										  <option>2013</option>
										  <option>2014</option>
										  <option>2015</option>
										  <option>2016</option>
										</select>
									</div>
							  	<div class="form-group">
										<label for="">Relación o parentezco con usted</label>							
										<select name="relation2" class="form-control">
											<option>Seleccione si es el caso</option>
											<option>Esposo (a)</option>
											<option>Hijo (a)</option>
											<option>Padre</option>
											<option>Madre</option>													 
										</select>
									</div>
									<div class="form-group">
										<label for="">Otro tipo de parentezco con usted</label>							
										<select name="otherRelation2" class="form-control">
												<option>Seleccione si es el caso</option>
										  	<option>Hermano (a)</option>
												<option>Primo (a)</option>
												<option>Abuelito (a)</option>												
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
										<label for="gender3">Sexo</label>										

										<div class="checkbox">
									    	<label>
									      	<input type="radio" name="gender3" value="Hombre" required> Hombre
									    	</label>
									    	<label>
									      	<input type="radio" name="gender3" value"Mujer" required> Mujer
									    	</label>					    
									  </div>
								  </div>
							  	<div class="form-group">
										<label for="birthday3">Fecha de Nacimiento</label>
										<select name="day3" class="form-control">
										  <option>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										  <option>6</option>
										  <option>7</option>
										  <option>8</option>
										  <option>9</option>
										  <option>10</option>
										  <option>11</option>
										  <option>12</option>
										  <option>13</option>
										  <option>14</option>
										  <option>15</option>
										  <option>16</option>
										  <option>17</option>
										  <option>18</option>
										  <option>19</option>
										  <option>20</option>
										  <option>21</option>
										  <option>22</option>
										  <option>23</option>
										  <option>24</option>
										  <option>25</option>
										  <option>26</option>
										  <option>27</option>
										  <option>28</option>
										  <option>29</option>
										  <option>30</option>
										  <option>31</option>
										</select>
										<select name="month3" class="form-control">
										  <option>Enero</option>
										  <option>Febrero</option>
										  <option>Marzo</option>
										  <option>Abril</option>
										  <option>Mayo</option>
										  <option>Junio</option>
										  <option>Julio</option>
										  <option>Agosto</option>
										  <option>Septiembre</option>
										  <option>Octubre</option>
										  <option>Noviembre</option>
										  <option>Diciembre</option>							  
										</select>
										<select name="year3" class="form-control">
										  <option>1920</option>
										  <option>1921</option>
										  <option>1922</option>
										  <option>1923</option>
										  <option>1924</option>
										  <option>1925</option>
										  <option>1926</option>
										  <option>1927</option>
										  <option>1928</option>
										  <option>1929</option>							  
										  <option>1930</option>
										  <option>1931</option>
										  <option>1932</option>
										  <option>1933</option>
										  <option>1934</option>
										  <option>1935</option>
										  <option>1936</option>
										  <option>1937</option>
										  <option>1938</option>
										  <option>1939</option>
											<option>1940</option>
										  <option>1941</option>
										  <option>1942</option>
										  <option>1943</option>
										  <option>1944</option>
										  <option>1945</option>
										  <option>1946</option>
										  <option>1947</option>
										  <option>1948</option>
										  <option>1949</option>
										  <option>1950</option>
										  <option>1951</option>
										  <option>1952</option>
										  <option>1953</option>
										  <option>1954</option>
										  <option>1955</option>
										  <option>1956</option>
										  <option>1957</option>
										  <option>1958</option>
										  <option>1959</option>
										  <option>1960</option>
										  <option>1961</option>
										  <option>1962</option>
										  <option>1963</option>
										  <option>1964</option>
										  <option>1965</option>
										  <option>1966</option>
										  <option>1967</option>
										  <option>1968</option>
										  <option>1969</option>
										  <option>1970</option>
										  <option>1971</option>
										  <option>1972</option>
										  <option>1973</option>
										  <option>1974</option>
										  <option>1975</option>
										  <option>1976</option>
										  <option>1977</option>
										  <option>1978</option>
										  <option>1979</option>
										  <option>1980</option>
										  <option>1981</option>
										  <option>1982</option>
										  <option>1983</option>
										  <option>1984</option>
										  <option>1985</option>
										  <option>1986</option>
										  <option>1987</option>
										  <option>1988</option>
										  <option>1989</option>
										  <option>1990</option>
										  <option>1991</option>
										  <option>1992</option>
										  <option>1993</option>
										  <option>1994</option>
										  <option>1995</option>
										  <option>1996</option>
										  <option>1997</option>
										  <option>1998</option>
										  <option>1999</option>
										  <option>2000</option>
										  <option>2001</option>
										  <option>2002</option>
										  <option>2003</option>
										  <option>2004</option>
										  <option>2005</option>
										  <option>2006</option>
										  <option>2007</option>
										  <option>2008</option>
										  <option>2009</option>
										  <option>2010</option>
										  <option>2011</option>
										  <option>2012</option>
										  <option>2013</option>
										  <option>2014</option>
										  <option>2015</option>
										  <option>2016</option>
										</select>
									</div>
							  	<div class="form-group">
										<label for="">Relación o parentezco con usted</label>							
										<select name="relation3" class="form-control">												
												<option>Seleccione si es el caso</option>
										  	<option>Esposo (a)</option>
												<option>Hijo (a)</option>
												<option>Padre</option>
												<option>Madre</option>											 
										</select>
									</div>
									<div class="form-group">
										<label for="">Otro tipo de parentezco con usted</label>							
										<select name="otherRelation3" class="form-control">
												<option>Seleccione si es el caso</option>
										  	<option>Hermano (a)</option>
												<option>Primo (a)</option>
												<option>Abuelito (a)</option>												
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
										<label for="gender4">Sexo</label>										

										<div class="checkbox">
									    	<label>
									      	<input type="radio" name="gender4" value="Hombre" required> Hombre
									    	</label>
									    	<label>
									      	<input type="radio" name="gender4" value"Mujer" required> Mujer
									    	</label>					    
									  </div>
								  </div>
							  	<div class="form-group">
										<label for="birthday4">Fecha de Nacimiento</label>
										<select name="day4" class="form-control">
										  <option>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										  <option>6</option>
										  <option>7</option>
										  <option>8</option>
										  <option>9</option>
										  <option>10</option>
										  <option>11</option>
										  <option>12</option>
										  <option>13</option>
										  <option>14</option>
										  <option>15</option>
										  <option>16</option>
										  <option>17</option>
										  <option>18</option>
										  <option>19</option>
										  <option>20</option>
										  <option>21</option>
										  <option>22</option>
										  <option>23</option>
										  <option>24</option>
										  <option>25</option>
										  <option>26</option>
										  <option>27</option>
										  <option>28</option>
										  <option>29</option>
										  <option>30</option>
										  <option>31</option>
										</select>
										<select name="month4" class="form-control">
										  <option>Enero</option>
										  <option>Febrero</option>
										  <option>Marzo</option>
										  <option>Abril</option>
										  <option>Mayo</option>
										  <option>Junio</option>
										  <option>Julio</option>
										  <option>Agosto</option>
										  <option>Septiembre</option>
										  <option>Octubre</option>
										  <option>Noviembre</option>
										  <option>Diciembre</option>							  
										</select>
										<select name="year4" class="form-control">
										  <option>1920</option>
										  <option>1921</option>
										  <option>1922</option>
										  <option>1923</option>
										  <option>1924</option>
										  <option>1925</option>
										  <option>1926</option>
										  <option>1927</option>
										  <option>1928</option>
										  <option>1929</option>							  
										  <option>1930</option>
										  <option>1931</option>
										  <option>1932</option>
										  <option>1933</option>
										  <option>1934</option>
										  <option>1935</option>
										  <option>1936</option>
										  <option>1937</option>
										  <option>1938</option>
										  <option>1939</option>
											<option>1940</option>
										  <option>1941</option>
										  <option>1942</option>
										  <option>1943</option>
										  <option>1944</option>
										  <option>1945</option>
										  <option>1946</option>
										  <option>1947</option>
										  <option>1948</option>
										  <option>1949</option>
										  <option>1950</option>
										  <option>1951</option>
										  <option>1952</option>
										  <option>1953</option>
										  <option>1954</option>
										  <option>1955</option>
										  <option>1956</option>
										  <option>1957</option>
										  <option>1958</option>
										  <option>1959</option>
										  <option>1960</option>
										  <option>1961</option>
										  <option>1962</option>
										  <option>1963</option>
										  <option>1964</option>
										  <option>1965</option>
										  <option>1966</option>
										  <option>1967</option>
										  <option>1968</option>
										  <option>1969</option>
										  <option>1970</option>
										  <option>1971</option>
										  <option>1972</option>
										  <option>1973</option>
										  <option>1974</option>
										  <option>1975</option>
										  <option>1976</option>
										  <option>1977</option>
										  <option>1978</option>
										  <option>1979</option>
										  <option>1980</option>
										  <option>1981</option>
										  <option>1982</option>
										  <option>1983</option>
										  <option>1984</option>
										  <option>1985</option>
										  <option>1986</option>
										  <option>1987</option>
										  <option>1988</option>
										  <option>1989</option>
										  <option>1990</option>
										  <option>1991</option>
										  <option>1992</option>
										  <option>1993</option>
										  <option>1994</option>
										  <option>1995</option>
										  <option>1996</option>
										  <option>1997</option>
										  <option>1998</option>
										  <option>1999</option>
										  <option>2000</option>
										  <option>2001</option>
										  <option>2002</option>
										  <option>2003</option>
										  <option>2004</option>
										  <option>2005</option>
										  <option>2006</option>
										  <option>2007</option>
										  <option>2008</option>
										  <option>2009</option>
										  <option>2010</option>
										  <option>2011</option>
										  <option>2012</option>
										  <option>2013</option>
										  <option>2014</option>
										  <option>2015</option>
										  <option>2016</option>
										</select>
									</div>
							  	<div class="form-group">
										<label for="">Relación o parentezco con usted</label>							
										<select name="relation4" class="form-control">												
												<option>Seleccione si es el caso</option>
										  	<option>Esposo (a)</option>
												<option>Hijo (a)</option>
												<option>Padre</option>
												<option>Madre</option>											 
										</select>
									</div>
									<div class="form-group">
										<label for="">Otro tipo de parentezco con usted</label>							
										<select name="otherRelation4" class="form-control">
												<option>Seleccione si es el caso</option>
										  	<option>Hermano (a)</option>
												<option>Primo (a)</option>
												<option>Abuelito (a)</option>												
										</select>
									</div>
									<div class="form-group">
										<label for="inputLastname">Dirección</label>							
										<textarea name="address4" class="form-control" rows="3" placeholder="Escribe la dirección de tu asegurado: Calle, Número, Colonia, Ciudad"></textarea>					    	
									</div>	
							</div>	
						</div>
						<button type="submit" class="btn btn-default">Registrar</button>
						<br>Nota: Si usted solicita el servicio por alguien más o si usted requiere el servicio médico con su médico de confianza, favor de ponerse en contacto con nosotros mediante nuestro correo o número telefónico.
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
