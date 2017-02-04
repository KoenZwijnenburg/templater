<?php get_header(); ?>

    <div id="content" class="container">
        <section>
            <h1> Laatste nieuws </h1>
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h2> <?php the_title(); ?> </h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="button">Lees meer...</a>
                </article>
            <?php endwhile ?>
        </section>
    </div>

<?php get_footer(); ?>