<?php include 'header.php';?>	
	<!-- #Content -->
	<div id="Content">
		<div class="columna-izquierda">
			<form action="add.php" method="post">
				<div class="campo-form">
					<label for="nom">Nombre:</label>
					<input id="nom" type="text" name="nombre" required>
				</div>
				<div class="campo-form">
					<label for="ap">Apellido:</label>
					<input id="ap" type="text" name="apellido" required>
				</div>
				<div class="campo-form">
					<label for="dni">DNI:</label>
					<input id="dni" type="dni" name="dni">
				</div>
				<div class="campo-form">
					<label for="estado">Estado Civil: </label>
					<select id="estado" name="estado">
						<option>-- Elige un tema --</option>
						<option value="soltero">Soltero</option>
						<option value="casado">Casado</option>
						<option value="divorciado">Divorciado</option>
					</select>
				</div>
				<div class="campo-form">
					<label for="pas">Pasatiempos:</label>
					<textarea id="pas" name="pasatiempos"></textarea>
				</div>
				<button type="submit">Enviar</button>
			</form>
		</div>
	
		<div class="columna-derecha">
			<aside>
				<h5><strong>Barra lateral con cosas que nadie lee, como cuentas de twitter,
				facebook,</strong></h5>
			</aside>
		</div>		
	</div>
<?php include 'footer.php';?>
