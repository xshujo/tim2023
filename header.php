<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Roboto+Condensed:wght@400;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <section class="header__nav">
            <?php wp_nav_menu(array(
                "menu" => "header",
                "container" => "nav"
            )) ?>

            <?php the_custom_logo() ?>

            <?php get_search_form(); ?>
        </section>
        <section class="header__gallery">

        </section>
    </header>