<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h4>', '</h4>' ); ?>
    </header>

    <div class="entry-content container-press">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="http://orenda.local/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="http://orenda.local/wp-content/uploads/2020/11/balm_couv_reduze.jpg" alt="">
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    </div>

</article>
