<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Informática Educativa I</title>
	<link href="/components/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 <!--   <link href="/components/vendor/bootstrap-material-design/dist/css/material-fullpalette.min.css" rel="stylesheet"> -->
	<link href="/css/bootstrap.superhero.min.css" rel="stylesheet">
<!--    <link href="/components/vendor/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href="/css/styles.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="/components/vendor/html5shiv/dist/html5shiv.min.js"></script>
    	<script src="/components/vendor/respond/dest/respond.min.js"></script>
    <![endif]-->

	<script src="/components/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/components/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body role="document">
	<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Nicolas Gonzalez</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Números <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/numeros/definicion-de-conjunto">Definición de Conjunto</a></li>
			    <li><a href="/numeros/transformacion-decial-a-fraccion">Tranformación de decimal a fracción</a></li>
			    <li><a href="/numeros/operatoria-en-q">Operatoria en Q</a></li>
			    <li><a href="/numeros/problemas-de-planteo">Problemas de Planteo</a></li>
			    <li><a href="/numeros/potencias-en-z">Potencias en Z</a></li>
			    <li><a href="/numeros/raices">Raices</a></li>
			    <li><a href="/numeros/logaritmos">Logaritmos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Álgebra <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/algebra/productos-notables-y-criterios-de-factorizacion">Productos notables y criterios de factorización</a></li>
                <li><a href="/algebra/ecuaciones-de-primer-grado">Ecuaciones de primer grado</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Funciones <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/funciones/funcion-cuadratica">Función Cuadrática</a></li>
                <li><a href="/funciones/funcion-logaritmo">Función Logaritmo</a></li>
                <li><a href="/funciones/funcion-potencia">Función Potencia</a></li>
                <li><a href="/funciones/funcion-raiz">Función Raíz</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Geometría <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/geometria/angulos-en-la-circunferencia">Ángulos en la circunferencia</a></li>
                <li><a href="/geometria/geometria-analitica">Geometría analítica</a></li>
                <li><a href="/geometria/teorema-de-euclides">Teorema de Euclides</a></li>
              </ul>
            </li>
            <li><a href="/material-apoyo"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Material de Apoyo</a></li>
            <li><a href="/contacto"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contacto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" role="main">
			<?= $tpl_content; ?>
            <footer>
                <hr />
                <p>&copy; Nicolás González</p>
            </footer>
	</div>
</body>
</html>