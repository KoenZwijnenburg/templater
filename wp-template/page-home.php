<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

    <div class="fullwidth banner">
        <img src="<?php echo get_template_directory_uri() ?>/images/city.jpg">
        <div class="banner-text">
            Your template engine
        </div>
    </div>

    <div class="container">
        <section class="content">
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </section>
    </div>

    <div class="container projects">
        <div class="blocks">
            <div class="block">
                <i class="material-icons">favorite_border</i>
                <div class="project-text">
                    <span class="text">Inspiration</span>
                </div>
            </div>

            <div class="block">
                <i class="material-icons">done</i>
                <div class="project-text">
                    <span class="text">Punctuality</span>
                </div>
            </div>

            <div class="block">
                <i class="material-icons">trending_up</i>
                <div class="project-text">
                    <span class="text">Resultivity</span>
                </div>
            </div>

            <div class="block">
                <i class="material-icons">fingerprint</i>
                <div class="project-text">
                    <span class="text">Identity</span>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>

<?php get_footer(); ?>

