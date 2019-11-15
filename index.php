<?php

// 							//
// 	Variables		//
// 							//

$taza0 =
 "JF" 
 ;

$taza1 =
"Bob-Sponge"
;
$taza2 =
"Leon"
;
$taza3 =
"I dont care"
;
$taza4 =
"X"
;
$taza5 =
"Naruto"
;
$taza6 =
"Mama"
;
$taza7 =
"Dia de las madres"
;

$poloche0 =
"Planton"
;
$poloche1 =
"Bunny"
;
$poloche2 =
"Rose"
;
$poloche3 =
"Trivial"
;
$poloche4 =
"Im Queen"
;
$poloche5 =
"Dreaming"
;
$poloche6 =
"Paleta"
;
$poloche7 =
"La pampara"
;

$gorra0 =
 "JF" 
;
$gorra1 =
"Youtube"
;
$gorra2 =
 "JF" 
;
$gorra3 =
"Youtube"
;
$gorra4 =
 "JF" 
;
$gorra5 =
"Youtube"
;
$gorra6 =
 "JF" 
;
$gorra7 =
"Youtube"
;


// 							//
// 	Variables		//
// 							//

$html =
"<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='X-UA-Compatible' content='ie=edge'>
	<link rel='shortcut icon' href='media/icon.png'>
	<title>FallPrintWay</title>
	<script src='https://kit.fontawesome.com/2c36e9b7b1.js' crossorigin='anonymous'></script>
	<link href='https://fonts.googleapis.com/css?family=Lato:350,400,700|Oswald&display=swap' rel='stylesheet'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css'>
	<link rel='stylesheet' href='css/estilos.css'>
</head>

<body>

	<nav class='nav'>

		<a href='#inicio' id='marca' class='marca'><img src='media/logo.png' alt='' width='75px'></a>

		<ul class='menu-mobile'>
			<li data-menuanchor='inicio' class='active'>
				<a href='#inicio'>Inicio</a>
			</li>

			<li data-menuanchor='productos'>
				<a href='#productos'>Productos</a>
			</li>

			<li data-menuanchor='contacto'>
				<a href='#contacto'>Contacto</a>
			</li>
		</ul>

		<div class='product-select'>

			<a href='#productos' onclick='tazaD()' class='producto-a'>Tazas</a>

			<a href='#productos' onclick='polocheD()' class='producto-a'>T-Shirts</a>

			<a href='#productos' onclick='gorraD()' class='producto-a'>Gorras</a>

		</div>

		<ul id='menu' class='menu'>
			<li data-menuanchor='inicio' class='active'>
				<a href='#inicio'>Inicio</a>
			</li>

			<li data-menuanchor='productos'>
				<a href='#productos'>Productos</a>
			</li>

			<li data-menuanchor='contacto'>
				<a href='#contacto'>Contacto</a>
			</li>
			<li class='onoroff'>
				<a href='#inicio' class='videoOffOn'></a>
			</li>
		</ul>


	</nav>

	<main id='fullpage'>

		<header class='section header'>

			<div id='titulo' class='contenedor-titulo'>
				<h1 class='titulo'>
					<span class='texto-naranja'>Imprenta</span>
					<span class='texto-blanco'>Diaz</span></h1>
				<p class='texto-blanco'>Impresiones de cualquier tipo</p>
			</div>

			<div class='contenedor-icono'>
				<p><a href='#productos' class='texto-blanco'><i class='fas fa-chevron-down'></i></a></p>
			</div>

			<!-- video -->

			<video data-autoplay muted class='bg-video'>
				<source src='media/bg-video.mp4' type='video/mp4'>
			</video>

		</header>

		<section class='section productos'>


			<article class='slide 0'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span dir='123' class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza0</span></p>
					<p class='descripcion texto-negro'>La marca que rompe records en </br>versatilidad y modelo</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco'>$poloche0</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra0</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>

			<article class='slide 1'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza1</span></p>
					<p class='descripcion texto-negro'>Lo que cada niño desea para desayunar</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco'>$poloche1</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra1</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>

			<article class='slide 2'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza2</span></p>
					<p class='descripcion texto-negro'>Caricatura animada</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco'>$poloche2</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra2</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>

			<article class='slide 3'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza3</span></p>
					<p class='descripcion texto-negro'>Para personas con actitud</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco'>$poloche3</span></p>
					<p class='descripcion texto-negro blanco-1'>Un modelo unico y moderno</p>
					<p class='precio blanco-1'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra3</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>

			<article class='slide 4'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza4</span></p>
					<p class='descripcion texto-negro'>Un concepto variable</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco negro-1'>$poloche4</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra4</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>

			<article class='slide 5'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza5</span></p>
					<p class='descripcion texto-negro'>El anime siempre presente</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco negro-1'>$poloche5</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra5</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>

			<article class='slide 6'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza6</span></p>
					<p class='descripcion texto-negro'>Un te amo nunca esta de mas</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco'>$poloche6</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra6</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>

			<article class='slide 7'>

				<div class='informacion-producto taza'>
					<p class='modelo'>
						<span class='texto-naranja'>Taza</span>
						<span class='texto-blanco'>$taza7</span></p>
					<p class='descripcion texto-negro'>Para todas las madres amorosas!</p>
					<p class='precio'>350</p>
				</div>

				<div class='informacion-producto poloche'>
					<p class='modelo'>
						<span class='texto-naranja'>T-Shirt</span>
						<span class='texto-blanco'>$poloche7</span></p>
					<p class='descripcion texto-negro blanco-1'>Un modelo unico y moderno</p>
					<p class='precio blanco-1'>250</p>
				</div>

				<div class='informacion-producto gorra'>
					<p class='modelo'>
						<span class='texto-naranja'>Gorra</span>
						<span class='texto-blanco'>$gorra7</span></p>
					<p class='descripcion texto-negro'>Un modelo unico y moderno</p>
					<p class='precio'>250</p>
				</div>

			</article>
		</section>

		<footer class='section footer'>

			<h2 class='texto-naranja'>Siguenos en redes Sociales</h2>
			<p class='redes-sociales'>
				<a href='#' class='whatsapp'><i class='fab fa-whatsapp-square'></i></a>
				<a href='#' class='facebook'><i class='fab fa-facebook-square'></i></a>
				<a href='#' class='twitter'><i class='fab fa-twitter-square'></i></a>
				<a href='#' class='instagram'><i class='fab fa-instagram'></i></a>
			</p>

		</footer>
	</main>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js'></script>
	<script src='js/app.js'></script>
	<script src='js/config.js'></script>
</body>

</html>";

echo ($html)

 ?>
