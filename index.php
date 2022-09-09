<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        	<meta charset="utf-8">
        		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
        		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
        	<title>App Contable</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Contenido Cuerpo web -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                   

                    <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>INICIO DE SESION</h3>
	                            		<p>Ingresar correo electronico y contraseña:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="validar.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Correo</label>
				                        	<input type="text" name="mail" placeholder="Correo" class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Contraseña</label>
				                        	<input type="password" name="pass" placeholder="Contraseña." class="form-password form-control" id="form-password">
				                        </div>
				                        <button  class="btn btn-primary" type="submit" value="Aceptar">ENTRAR!</button>
				                    </form>
			                    </div>
		                    </div>



                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Registro de usuario</h3>
	                            		<p>Digite correctamente los campos solicitados:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" method="post" action="" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="realname">Ingresar Identificacion</label>
				                        	<input type="text" name="realname" placeholder="Ingrese su Identificacion" class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="nick">Ingresar Email</label>
				                        	<input type="text" name="nick" placeholder="Ingrese su Correo" class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="pass">Ingresar contraseña</label>
				                        	<input type="password" name="pass" placeholder="Ingresa tu contraseña" class="form-email form-control" id="form-email">
				                        </div>
                                <div class="form-group">
                                  <label class="sr-only" for="rpass">Repetir contraseña</label>
                                  <input type="password" name="rpass" placeholder="Repite contraseña" class="form-email form-control" id="form-email">
                                </div>
								<button  class="btn btn-primary" type="submit" name="submit" value="Registrarse">REGISTRARSE</button>
 

				                    </form>
			                    </div>
                        	</div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php
        		if(isset($_POST['submit'])){
        			require("registro.php");
        		}
        	?>
        <!--Fin formulario registro -->

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">

        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>TELECOMUNICACIONES <i class="fa fa-love"></i><a href="">W.L.B</a></p>
        			</div>

        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
