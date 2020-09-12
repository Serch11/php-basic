<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css" media="screen">

		body{

			background-color: #FF5733;
			text-align: center;
		}

			div{

				background-color: #FDFDFD;
				color: #FDFDFD;
				background: #FDFDFD;
			}
			p{
				color: #515151;
			}
			form{

				background-color:white;
				padding: 10px;
				margin: 100px auto;
				width:400px;
			}
			input[type='text'],input[type='password']{
				padding: 10px;
				width: 380px;
			}
			input[type='submit']
			{
				border:0;
				background-color : #F12828;
				padding: 10px 20px;
			}
			.error {

				background-color: #EA0F0F;
				font-size: 10px;
				padding: 10px;
			}
			.correcto{

				background-color:#22CC2F;
				font-size: 10px;
				padding: 10px;
			}

	</style>
</head>
<body>

		<center>
			<form action="" method="POST" accept-charset="utf-8">

					<?php
							if(isset($_POST['usuario'])){
								$usuario = $_POST['usuario'];
								$password = $_POST['password'];
								$email = $_POST['email'];

								$campos = array();
							if ($usuario == "") {
								array_push($campos,"El campo nombre no puede estar vacio");
							}
							 if ($password == "" && strlen($password) < 6 ){
								array_push($campos,"El campo Password  no puede estar vacio , ni tener menos de 6 caracteres");
							}
							if ($email == "" || strpos($email, "@") === false) {
								array_push($campos,"Ingresa un correo valido");
							}

							if (count($campos) > 0) {
								echo "<div class='error'";
								for ($i = 0; $i < count($campos); $i++) {
									echo "<li>".$campos[$i]."</li>";
								}
							}else{
									echo "<div class='correcto'>
										datos correctos";
							}
							echo '</div>';
						}
					 ?>



					<table>
						<tr>  <td colspan="" rowspan="" headers=""><label for="">Usuario</label>
						</td></tr>
						<tr>  <td colspan="" rowspan="" headers=""> <input type="text" name="usuario" value=""></td></tr>
						<tr> <td><label>Password</label></td></tr>
						<tr> <td><label><input type="password" name="password"></label></td></tr>
						<tr> <td><label>Correo</label></td></tr>
						<tr><td><label><input type="text" name="email"></label></td></tr>
						<tr> <td><label><input type="submit" name="" value="Inisiar Seccion"></label></td></tr>
					</table>
			</form>
		</center>


</body>
</html>