<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage YourTheme
 */

get_header();
?>

    <main id="primary" class="site-main" role="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e( 'Page not found', 'your-textdomain' ); ?>
                </h1>
            </header>

            <div class="page-content">
                <p>
                    <?php esc_html_e(
                        'The page you are looking for does not exist. It may have been moved, renamed, or deleted.',
                        'your-textdomain'
                    ); ?>
                </p>

                <?php get_search_form(); ?>

                <p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php esc_html_e( 'Return to the homepage', 'your-textdomain' ); ?>
                    </a>
                </p>
            </div>
        </section>

    </main>

<?php
get_footer();
