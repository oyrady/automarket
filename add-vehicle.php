<?php include("cabecera.php"); ?>
<div id="page-content">

	<section id="car-pagination">
		<div class="content-holder">
			<div class="page-main-heading extra-space">
				<div class="heading-location">
					<h2><span class="bold">Sell your vehicle</span></h2>
					<p class="page-location">
						<a href="index.html">Home </a>
						<span class="greater-than">&gt;&gt;</span>
						<a href="#">Add an offer</a>
					</p>
				</div>
			</div>
			
			<nav class="default-tabs split-tabs">
				<ul>
					<li class="current-item"><a href="#"><span> Nueva Oferta</span></a></li>
							</ul>
			</nav>
			
		</div>
	</section><!--#car-pagination -->
		
	<section id="sell-your-vehicle">
		<div class="content-holder">
			<div class="full-width light-grey-corner-box box-text-default">
				<h3>Sell ​​your car on <strong>AutoMarket </strong>and benefit from more than 1 million potential buyers every month!</h3>
				<p>Required fields are marked with * </p>
				<p>Please post offers only on the car (parts are a special category).</p>
				<p>If you are a dealer, please visit the dealers section</p>
				<p>If you have difficulties in posting an offer on the website, please call 0742 016 570</p>
			</div>
			
			<div class="full-width sell-form <!--options-form-->">
				<form action="php/cargar_auto.php" method="post">
					<fieldset id="vehicle-data">
						<legend><span class="bold">Datos del</span> Vehiculo</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-manufacturer" >Marca: <span class="mandatory">*</span></label>
									<select id="seleccion-marca" name="marca">
										<option selected="selected">Seleccionar</option>
										<option value="fiat">Fiat</option>
										<option value="chevrolet">Chevrolet</option>
										<option value="toyota">Toyota</option>
									</select>
								</div>
								<div>
									<label for="select-model">Modelo: <span class="mandatory">*</span></label>
									<select id="select-model" name="modelo">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-fabrication">Año de Fabricacion: <span class="mandatory">*</span></label>
									<select id="select-fabrication" name="anio_fabricacion">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							</li>
							
							<li class="select-four">
								<div>
									<label for="select-fuel-type">Tipo de combustible: <span class="mandatory">*</span></label>
									<select id="select-fuel-type" name="combustible">
										<option selected="selected">Seleccionar</option>
										<option value="option1">Naftero</option>
										<option value="option1">Diesel</option>
										<option value="option1">Gnc</option>
									</select>
								</div>
								<div>
									<label for="select-transmission">Transmision: <span class="mandatory">*</span></label>
									<select id="select-transmission" name="transmision">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="select-doors">Cilindradas (en cm³)<span class="mandatory">*</span></label>
									<select id="select-doors" name="cilindrada">
									  <option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
							</li><!-- line #2 -->
							
							<li class="select-four"></li><!-- line #3 -->
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-equipment" class="checkbox-selection">
						
					</fieldset>
					
					<fieldset id="vehicle-description">
						<legend><span class="bold">Descripcion</span> del Vehiculo</legend>
						<div class="field-content">
							<label for="vehicle-description-field">Ingrese algun texto:</label>
							<textarea id="vehicle-description-field" name="descripcion" class="description"></textarea>
						</div>
					</fieldset>
					
					<fieldset id="vehicle-registration">
						
</fieldset>
					
					<fieldset id="vehicle-condition">
						<legend><span class="bold">Condicion</span> del Vehiculo</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="select-technical-condition">Condicion tecnica: <span class="mandatory">*</span></label>
									<select id="select-technical-condition" name="condicion_tecnica">
										<option selected="selected">Select</option>
										<option value="option1">Option 1</option>
										<option value="option1">Option 2</option>
										<option value="option1">Option 3</option>
									</select>
								</div>
								<div>
									<label for="input-kilometers">Kilometros: <span class="mandatory">*</span></label>
									<input type="text" name="kilometros" id="input-kilometers" class="default-input" />
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-price">
						<legend><span class="bold">Precio</span> del Vehiculo</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="input-price">Precio: <span class="mandatory">*</span></label>
									<input type="text" name="precio" id="input-price" class="default-input" />
								</div>
								<div>
									<label for="select-currency">Moneda: <span class="mandatory">*</span></label>
									<select id="select-currency" name="moneda">
										<option selected="selected">Pesos</option>
										<option value="option1">Dolar</option>
										
									</select>
								</div>
								<div class="checkbox-custom">
									<div><input type="checkbox" name="negociable" value="si" id="check-price-negotiable"/></div>
									<label for="check-price-negotiable">&nbsp; Precio negociable</label>
								</div>
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-photos">
						<legend><span class="bold">Fotos</span> Del Vehiculo</legend>
						<ul class="field-content">
							<li class="select-six">
								<div class="upload-file-container" id="uno">
									<span>
										<input type="file" name="files[]" div="uno" />
									</span>
								</div>
								<div class="upload-file-container" id="dos">
									<span>
										<input type="file" name="files[]" div="dos"/>
									</span>
								</div>
								<div class="upload-file-container" id="tres">
									<span>
										<input type="file" name="files[]" div="tres" />
									</span>
								</div>
								<div class="upload-file-container" id="cuatro">
									<span>
										<input type="file" name="files[]" div="cuatro" />
									</span>
								</div>
								<div class="upload-file-container" id="cinco">
									<span>
										<input type="file" name="files[]" div="cinco" />
									</span>
								</div>
								<div class="upload-file-container" id="seis">
									<span>
										<input type="file" name="files[]" div="seis"/>
									</span>
								</div>								
							</li>
						</ul>
					</fieldset>
					
					<fieldset id="seller-details">
						<legend><span class="bold">Detalles</span> del vendedor</legend>
						<ul class="field-content">
							<li class="select-four">
								<div>
									<label for="input-name">Nombre: <span class="mandatory">*</span></label>
									<input type="text" name="name" id="input-name" class="default-input" />
								</div>
								<div>
									<label for="input-phone-1">Telefono: <span class="mandatory">*</span></label>
									<input type="text" name="phone_1" id="input-phone-1" class="default-input" />
								</div>
								<div>
									<label for="input-phone-2">Telefono 2: <span class="mandatory">*</span></label>
									<input type="text" name="phone_2" id="input-phone-2" class="default-input" />
								</div>
								<div>
									<label for="input-city">Ciudad: <span class="mandatory">*</span></label>
									<input type="text" name="city" id="input-city" class="default-input" />
								</div>
							</li>
							<li class="select-four"></li>
						</ul>
					</fieldset>
					
					<fieldset id="vehicle-submit" class="checkbox-selection">
						<div>
							<div class="agree-checkbox">
								<input type="checkbox" value="agreed" id="check-agreed" /><label for="check-agreed">Estoy de acuerdo con los terminos y condiciones. </label>
							</div>
							<div class="submit-vehicle default-submit">
								<input type="submit" value="enviar" />
							</div>
						</div>
							
					</fieldset>
					
				</form>				
			</div>
			
		</div>
	</section>
	
</div><!--#page-content-->
	


<?php include("footer.php");?>