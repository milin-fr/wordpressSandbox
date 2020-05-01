<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<header>
    <?php wp_nav_menu(
        array(
            "theme_location" => "social-menu"
        )
    ); ?>
</header>