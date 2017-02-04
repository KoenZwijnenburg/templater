<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container header-content">
            <a class="logo" href="/">
               LOGO
            </a>
            <nav>
                <div class="mobile hamburger-menu">
                    <i class="fa fa-bars"></i>
                </div>
                <?php wp_nav_menu(); ?>
            </nav>

            <div class="search">
                <form name="search">
                    <input type="search" id="search" placeholder="zoeken...">
                </form>
            </div>
        </div>
    </header>
