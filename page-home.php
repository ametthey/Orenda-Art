<?php // Template Name: Home ?>
<?php get_header(); ?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <article class="full-width">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                        <p>"René Magritte et sa femme", Magritte.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="/wp-content/uploads/2020/11/balm_couv_reduze.jpg" alt="">
                        <p>"René Magritte et sa femme", Magritte.</p>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>


        </article>
        <article class="exhibitions-past-exhibition">

            <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>

            <div class="entry-content container-press">
                <h2>Sculpture à l'Assemblée Nationale</h2>
                <p class="press-item-date">Joëlle Rostkowski, November, 12 2020</p>
                <a class="item-link" href="#">View The Article</a>
                <p class="press-item-texte">La Promesse de Bonheur, sculpture monumentale de Maria PAPA Rostkowska (1923-2008) fait partie des acquisitions récentes de l'Assemblée Nationale. Elle a été installée, en juin 2011, au Palais Bourbon juste en face de l'entrée de l'hémicycle. D'une hauteur de plus de trois mètres cette œuvre en marbre blanc de Carrare a été exécutée à Pietrasanta (Italie) par l'artiste en « taille directe » en 1995.</p>
            </div>

        </article>

    </main>
</div>

<?php get_footer(); ?>
