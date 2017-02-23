<?php


function the_content() {
    echo '<p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>';
}

function the_title() {
    echo 'Title lorem ipsum';
}

function the_loop() {
    for ($x = 0; $x <= 5; $x++) {
        echo '<article class="list">';
        echo '<h2>News title</h2>';
        the_excerpt();
        echo '<a href="/?page=single" class="button read-more">Read more</a>';
        echo '</article>';
    }
}

function get_header() {
//    include_once 'wp-template/header.php';
}

function get_sidebar() {
    include_once 'wp-template/sidebar.php';
}


function the_excerpt() {
    echo '<p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est... </p>';
}

function wp_head() {

}

function wp_nav_menu() { ?>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/?page=about-us">Page</a></li>
        <li><a href="/?page=sidebar">Sidebar</a></li>
        <li><a href="/?page=news">Index</a></li>
        <li><a href="/?page=category">Category</a></li>
        <li><a href="/?page=contact">Contact us</a></li>
    </ul>
<?php  }


function wp_title() {
    echo 'testable wordpress theme';
}

function single_cat_title() {
    echo 'Category title';
}

function the_post() {}

function get_footer() {

}


function get_template_directory_uri() {
    return 'http://localhost:3000/wp-template/';
}



?>