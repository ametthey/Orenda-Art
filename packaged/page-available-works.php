<?php
    // Template Name: Available Works
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="chapter available-works">
                <h6><?php esc_html_e( 'Oeuvres disponibles' , 'orenda_art' ); ?></h6>
                <p>Les oeuvres suivantes sont disponibles à la galerie en permanence. pour plus d’informations, veuillez contacter la galerie par téléphone ou email.</p>
            </div>

            <article class="available-works-grid">
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>

                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>

                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>

                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>

                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>

                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
                <div class="available-works-item">
                    <img src="/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
                    <h3>Artist Name</h3>
                    <h5>Art Work name, 04/10/1999</h5>
                </div>
            </article>


        <?php endwhile; endif; ?>

    </main>
</div>

<?php get_footer(); ?>
