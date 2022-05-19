<?php
$dominio = $_SERVER['HTTP_HOST'];
$urlAtual = "http://" . $dominio . $_SERVER['REQUEST_URI'];
$urlSite = get_bloginfo('url') . "/";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<title>Real State</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/application.css">

	<?php wp_head(); ?>

</head>

<body id="top">

	<nav>
		<div class="menu-itens flexMode">
			<div class="logo">
				<a href="#">
					<img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="">
				</a>
			</div>

			<ul>
				<li>
					<a href="#">Contact us</a>
				</li>
				<li>
					<a href="#">Call: 1234567890</a>
				</li>
				<li>
					<a href="#">Email: demo@gmail.com</a>
				</li>
			</ul>
		</div>
	</nav>

	<nav class="mobile-menu">
	
		<div class="barra-menu">
			<a href="#home" class="active"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt=""></a>
			
			<div id="links">
				<a href="#">Contact us</a>
				<a href="#">Call: 1234567890</a>
				<a href="#">Email: demo@gmail.com</a>
			</div>
		
			<a href="javascript:void(0);" class="icon" onclick="esconderMenu()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
	</nav>