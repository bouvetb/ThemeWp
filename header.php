<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<section class="hero">
		<header>
			
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
					wp_nav_menu( array( 'theme_location' => 'header-menu' ) );

					?>
				</nav>
			</div>
		</header><!--  end header section  -->

			<section class="caption">
				<h2 class="caption">Bienvenue sur se site de gestion de logements</h2>
				<h3 class="properties">Appartements - Maisons - Villas</h3>
			</section>
	</section><!--  end hero section  -->