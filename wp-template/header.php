<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style/css/style.css" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="hamburger-menu">
                <i class="material-icons">menu</i>
            </div>

            <div class="container header">
                <div class="logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"></a>
                </div>

                <nav>
                    <div class="close-menu"><i class="material-icons">close</i></div>
                    <?php wp_nav_menu(); ?>
                </nav>
            </div>
        </header>