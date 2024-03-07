<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" >



                <div class="entry-content">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <!-- Image mise en avant -->
                    <div class="featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    

                </div><!-- .entry-content -->
                    <div class="container_acf">
                    
                        <!-- Description ACF -->
                        <div class="acf-description">
                            <h2>Description :</h2>
                        <p><?php echo get_field('description_projets'); ?></p> 
                        </div>

                        <!-- Contexte ACF -->
                        <div class="acf-contexte">
                            <h2>Contexte :</h2>
                            <p><?php echo get_field('contexte_projets'); ?></p>
                        </div>
                        <!-- Lien Github ACF -->
                        <div class="acf-contexte">
                            <h2>Lien Github :</h2>
                            <a href="<?php echo esc_url(get_field('link_github')); ?>"><?php echo esc_url(get_field('link_github')); ?></a>

                        </div>
                    </div>
            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>


