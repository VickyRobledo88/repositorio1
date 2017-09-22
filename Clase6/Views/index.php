<?php 
	include 'header.php';
	include_once("../services.php");
	//include 'services.php';
?>	
	<!-- #Content -->
	<div id="Content">
		<div class="columna-izquierda">
			<section>
					<table width='80%' border=0>

					<tr bgcolor='#CCCCCC'>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>DNI</td>
					</tr>
					<?php 
					//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
					$servicio=new Services();
					$personas=$servicio->listarDatos();
					
					foreach ($personas as $res) { 		
						echo "<tr>";
						echo "<td>".$res->getNombre()."</td>";
						echo "<td>".$res->getApellido()."</td>";
						echo "<td>".$res->getDni()."</td>";	
						//echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
					}
					?>
					</table>
			</section>
		</div>
	
		<div class="columna-derecha">
			<aside>
				<h5><strong>Barra lateral con cosas que nadie lee, como cuentas de twitter,
				facebook,</strong></h5>
			</aside>
		</div>		
	</div>
<?php include 'footer.php';?>	
