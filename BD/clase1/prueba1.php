<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    	body{font-family: arial; margin: 0;}
    	.resultado{width: 60%; margin: 0 auto; margin-top: 2em;}
    	h1,h2,h3, h4{margin: 0;}
    	header{padding: 15px; padding-left: 4em;}
    	.success{ background: #0be881;  color: #1e272e; padding: 15px; border-radius: 35px; width: 80%; text-align: center; margin-top: 1em;}
    	.warning{background: #ff5e57; color: #1e272e; padding: 15px; border-radius: 35px; width: 80%; text-align: center; margin-top: 1em;}
    	.form{margin-top: 2em;}
    	.btn{padding: 8px 15px; border: none; background: #1e272e; color: #FFF; cursor: pointer; width: 100%;}
    </style>
</head>
<body>
	<header style="background: #ffdd59; color: #485460;">
		<h2>Prubeas Mysql</h2>
	</header>
	<div style="width: 80%; margin: 0 auto;">
		<div class="resultado">
			<h3>Resultado:</h3>
			<?php 
			//credenciales
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$db = "sistema";
			//conexion
			$conn = new mysqli($hostname, $username, $password, $db);

			//check connection
			if ($conn->connect_error) {
				echo "conection failed: " . $conn->connect_error;
				echo "<div class='warning'>
					<h3>Vuelva a Intentar</h3>
				</div>";
			}else{
			?>
				<div class="success">
					<h3>Conexion Exitosa</h3>
				</div>
			<?php 
			}
			 ?>

			 
			
			<div class="form" style="">
				<fieldset style="width:80%; text-align: center;">
					<legend>Consulta SQL - DDL</legend>
					<form action="prueba1.php" method="post">
						<label for="">
							<br>
							<h3>Consulta Sql:</h3>
							<textarea name="consulta" id="" cols="51" rows="8" placeholder="Escriba su consulta sql, respentado su sintaxis" style="font-size: 25px; box-sizing: border-box;"></textarea>
						</label><br><br>
						<label for="">
						<button class="btn">Enviar Consulta SQL</button>
						</label>
					</form>
				</fieldset>
			</div><!-- div del formulario -->

			<?php 
			 	
				//Operacion con datos
			 	//se utilizara empty
			 	if (empty($_POST['consulta'])) {
			 		echo "<div class='warning'>
							<h3>Introduzca datos</h3>
						  </div>";
					
			 	}else{

			 		//Adquisicion de datos
					$consulta = $_POST['consulta'];
			 		/*Si la variable no viene vacia*/

			 		var_dump($consulta);

			 		if ($conn->query($consulta) === TRUE) {
						echo "Consulta Successfully";
					}else{
						echo "Error creating database " .  $conn->error;
						
					}	
			 	}
			 	//fin del if principal
	
				
			  ?>
			
		</div><!--Div del Resultado -->	
	</div><!-- div container -->    
</body>
</html>