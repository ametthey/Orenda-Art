<?php
// Template Name: Founders
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Chapter: les fondateurs -->
        <!-- <div class="chapter"> -->
        <!--     <h6><?php esc_html_e( 'Les fondateurs', '_themename' ); ?></h6> -->
        <!-- </div> -->

        <article class="container-founders-bio">
            <?php if ( have_rows( 'the_founders' ) ) : ?>
                <?php while ( have_rows( 'the_founders' ) ) : the_row(); ?>


                <div class="container-founders-item">
                    <!-- Founder #1 -->
                    <?php if ( have_rows( 'founder_#1' ) ) : ?>
                        <?php while ( have_rows( 'founder_#1' ) ) : the_row(); ?>
                            <?php $founder_portrait = get_sub_field( 'founder_portrait' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $founder_portrait ) : ?>
                            <?php echo wp_get_attachment_image( $founder_portrait, $size, array( 'class' => 'image' ) ); ?>
                            <?php endif; ?>
                            <h3><?php the_sub_field( 'founder_title' ); ?></h3>
                            <p class="blue"><?php the_sub_field( 'founder_description' ); ?></p class="blue">
                            <p class="item-texte"><?php the_sub_field( 'founder_bio' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="container-founders-item">
                    <!-- Founder #2 -->
                    <?php if ( have_rows( 'founder_#2' ) ) : ?>
                        <?php while ( have_rows( 'founder_#2' ) ) : the_row(); ?>
                            <?php $founder_portrait = get_sub_field( 'founder_portrait' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $founder_portrait ) : ?>
                                <?php echo wp_get_attachment_image( $founder_portrait, $size ); ?>
                            <?php endif; ?>
                            <h3><?php the_sub_field( 'founder_title' ); ?></h3>
                            <p class="blue"><?php the_sub_field( 'founder_description' ); ?></p class="blue">
                            <p class="item-texte"><?php the_sub_field( 'founder_bio' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="container-founders-item">
                    <!-- Founder #3 -->
                    <?php if ( have_rows( 'founder_#3' ) ) : ?>
                        <?php while ( have_rows( 'founder_#3' ) ) : the_row(); ?>
                            <?php $founder_portrait = get_sub_field( 'founder_portrait' ); ?>
                            <?php $size = 'full'; ?>
                            <?php if ( $founder_portrait ) : ?>
                                <?php echo wp_get_attachment_image( $founder_portrait, $size ); ?>
                            <?php endif; ?>
                            <h3><?php the_sub_field( 'founder_title' ); ?></h3>
                            <p class="blue"><?php the_sub_field( 'founder_description' ); ?></p class="blue">
                            <p class="item-texte"><?php the_sub_field( 'founder_bio' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <?php endwhile; ?>
<?php endif; ?>
        </article>

        <!-- Chapter: Notre histoire -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Notre histoire', '_themename' ); ?></h6>
        </div>

        <!-- Component: Carousel with thumbnails - Galerie du XXème siècle -->
        <?php get_template_part( 'template-parts/founders/galerie', 'item' ); ?>

        <!-- Component: Carousel with thumbnails - Galerie du XXème siècle -->
        <?php get_template_part( 'template-parts/founders/galerie', 'item_inverse' ); ?>

    </main>
</div>

<?php get_footer(); ?>
