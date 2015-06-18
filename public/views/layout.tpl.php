<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Informática Educativa I</title>
	<link href="/components/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/components/vendor/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="/components/vendor/html5shiv/dist/html5shiv.min.js"></script>
    	<script src="/components/vendor/respond/dest/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#">Nicolas Gonzalez</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" role="main">
		<div class="row">
			<?= $tpl_content; ?>
        </div>
        <div class="row">
            <footer>
                <hr />
                <p>&copy; Nicolás González</p>
            </footer>
        </div>
	</div>
	<script src="/components/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/components/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>