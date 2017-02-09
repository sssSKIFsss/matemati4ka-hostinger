<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matemat14ka
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>    <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>       <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>       <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]>--> <html class="no-js" lang="ru"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
	<head>
		<!--выбор кодировки-->
		<meta charset="<?php bloginfo('charset'); ?>">
		<!--отключение режима совместимости в ИЕ-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php bloginfo('name') ?></title>
		<!--включение масштабирования на мобильных устройствах-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML6 Template by FREEHTML5.CO" />
		<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
		<meta name="author" content="Sergey Kozhevnikov" />

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href= "<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<header id="fh5co-header">
				<div class="container">
					<!-- Планка бренд-меню -->
					<nav class="navbar navbar-default">
						<!-- Заголовок планки -->
						<div class="navbar-header">
							<!-- Кнопка мобильного меню -->
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
							<!-- Логотип -->
							<a class="navbar-brand" href=#><?php bloginfo( 'name' ); ?></a>
						</div> <!-- end Заголовок планки -->
						<!-- Меню -->
						<div id="navbar" class="navbar-collapse collapse">
							<!-- Линейка меню. Таких линеек может быть несколько -->
							<ul class="nav navbar-nav navbar-right ">

								<li class="active"><a href="#" data-nav-section="home"><span>Начало</span></a></li>
								<li><a href="#" data-nav-section="portfolio"><span>Работа</span></a></li>
								<li><a href="#" data-nav-section="testimonials"><span>Отзывы</span></a></li>
								<li><a href="#" data-nav-section="services"><span>Скилы</span></a></li>
								<li><a href="#" data-nav-section="about"><span>Обо мне</span></a></li>
								<li><a href="#" data-nav-section="contact"><span>Контакты</span></a></li>
								<?php
								// wp_nav_menu (array('theme_location' => 'header-menu'));
								?>

							</ul> <!-- end Линека меню -->
						</div> <!-- end Меню -->
					</nav> <!-- end Планка бренд-меню -->
				</div>
			</header>