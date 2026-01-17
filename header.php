<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<header>
    <?php wp_nav_menu( array(
            'theme_location' => 'header',
        ) );
    ?>
</header>
<body <?php body_class(); ?>>
<main>