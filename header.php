<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<header class="py-3">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="logo">
					<a href="<?php echo home_url() ?>">
						<img width="120" src="<?php echo THEME_DIR . '/images/logo.png' ?>"></a>
				</div>
				<div class="header-right d-block titillium">
					<?php if (is_active_sidebar('header-right')) { ?>
						<?php dynamic_sidebar('header-right'); ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<nav>
		<div class="container">
			<?php wp_nav_menu() ?>
		</div>
	</nav>