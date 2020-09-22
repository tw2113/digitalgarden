<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Digital Garden</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="profile" href="http://microformats.org/profile/specs" />
	<link rel="profile" href="http://microformats.org/profile/hatom" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <h1><a href="/">Digital Garden</a></h1>

    <a href="<?php the_permalink( 41 ); ?>">What is this?</a>
</header>
