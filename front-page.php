<?php get_header(); ?>

<section id="welcome">
    <div class="wrapper">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php

$args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'order' => 'ASC',
);

$all_posts = new WP_Query($args);

if (count($all_posts->posts) > 0) { ?>
    <section id="about">
        <div class="wrapper">
            <div class="cards">
                <?php foreach ($all_posts->posts as $p) { ?>
                    <div class="card">
                        <div class="card-image">
                            <?= get_the_post_thumbnail($p->ID, 'medium') ?>
                        </div>
                        <div class="card-name"><?= get_the_title($p->ID) ?></div>
                        <div class="card-name"><?= $p->post_content ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<section id="contact">
    <div class="wrapper">
       <h2>Kontakt</h2>
        <?php echo do_shortcode('[contact-form-7 id="d91c77f" title="Kontaktformular"]'); ?>
    </div>
</section>

<?php get_footer(); ?>
