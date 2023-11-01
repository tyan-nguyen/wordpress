<?php get_header(); ?>
<main>
    <section>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </section>
    <aside>
        <?php get_sidebar(); ?>
    </aside>
</main>
<?php get_footer(); ?>