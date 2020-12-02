<?php
// Template Name: Exhibitions
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Chapter: Exposition actuelle -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Exposition actuelle', 'orenda_art' ); ?></h6>
        </div>

        <?php get_template_part( 'template-parts/sliders/carousel', 'hero-exhibition' ); ?>

        <article class="exhibitions-presentation">
            <h2>Revelation de la lumiere - 4 Février - 16 Mars 2021</h2>
            <h3>Maurizio Toffoletti,  sculptures </h3>
            <!-- <div class="exhibitions&#45;links"> -->
            <!--     <a href="#"class="item&#45;link">Download Invitation</a> -->
            <!--     <a href="#"class="item&#45;link">Download Press Release</a> -->
            <!-- </div> -->
        </article>

        <!-- <article class="exhibitions&#45;presentation&#45;full&#45;image"> -->
        <!--     <img src="/wp&#45;content/uploads/2020/11/Aspect&#45;ratio&#45;4x3.svg_.png" alt=""> -->
        <!-- </article> -->
        <!--  -->
        <!-- <article class="exhibitions&#45;presentation&#45;four&#45;images"> -->
        <!--     <img src="/wp&#45;content/uploads/2020/11/Aspect&#45;ratio&#45;4x3.svg_.png" alt=""> -->
        <!--     <img src="/wp&#45;content/uploads/2020/11/Aspect&#45;ratio&#45;4x3.svg_.png" alt=""> -->
        <!--     <img src="/wp&#45;content/uploads/2020/11/Aspect&#45;ratio&#45;4x3.svg_.png" alt=""> -->
        <!--     <img src="/wp&#45;content/uploads/2020/11/Aspect&#45;ratio&#45;4x3.svg_.png" alt=""> -->
        <!-- </article> -->

        <!-- Chapter: Expositions passées -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Expositions passées', 'orenda_art' ); ?></h6>
        </div>

        <!-- Component: Carousel with thumbnails - #1 -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>

        <!-- Component: Carousel with thumbnails - #2 -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>

        <!-- Component: Carousel with thumbnails - #3 -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>



        <?php endwhile; endif; ?>

    </main>
</div>

<?php get_footer(); ?>
