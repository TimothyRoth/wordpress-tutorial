<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <a href="<?= get_post_type_archive_link("post") ?>">Zurück</a>
        <h2><?php the_title(); ?></h2>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
