<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
