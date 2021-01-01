<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@400;600;800&family=Raleway:wght@400;500;900&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
	
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="page-wrapper">

			<!-- nav -->
			<nav class="menu" role="navigation" id="menu">
				<div class="menu__schedule" id="menu-schedule">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<ul class="menu__schedule__list">
									<li>
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#F4A309" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
										<a target="_blank" href="tel:942804849"><span>942804849</span></a>
									</li>
									<li>
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#F4A309" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
										&nbsp;<a href="mailto:abogados@perezdelolmo.com">abogados@perezdelolmo.com</a>
									</li>
									<li>
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path  fill="#F4A309" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
										<a href="https://goo.gl/maps/F73eX3b4TYNfnbFD6" target="_blank"><span>C/ San José nº 1, 3º C, Torrelavega, 39300</span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="container" id="menu-bar">
					<div class="row">
						<div class="col-xs-12">
							<div class="menu__brand">
								<div class="menu__brand__bg" id="menu-brand"></div>
								<div class="logo" id="logo">
									<span>PÉREZ DEL OLMO</span>
									<span>ABOGADOS</span>
								</div>
							</div>
							<div class="menu__container">
								<?php html5blank_nav(); ?>
							</div>
							<div class="menu__toggle">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>	
				</div>
			</nav> 
			<nav class="nav side-menu" id="side-menu">
				<div class="side-menu__container">
					<div class="side-menu__wrap">
						<?php html5blank_nav(); ?>
					</div>
					<div class="side-menu__bottom">
						<ul class="menu__schedule__list">
							<li>
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#F4A309" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
								<a href="tel:942804849"><span>942804849</span></a>
							</li>
							<li>
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#F4A309" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
								<span>
									<a href="mailto:abogados@perezdelolmo.com">abogados@perezdelolmo.com</a>
								</span>
							</li>
							<li>
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path  fill="#F4A309" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
								<a href="https://goo.gl/maps/F73eX3b4TYNfnbFD6" target="_blank"><span>C/ San José nº 1, 3º C, Torrelavega, 39300</span></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- /nav -->

			
