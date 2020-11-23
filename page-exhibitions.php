<?php
// Template Name: Exhibitions
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="article-introduction">
            <header class="entry-header">
                <h4>Current Exhibitions</h4>
            </header>
        </article>

        <article class="exhibitions-presentation">
            <h2>Revelation de la lumiere</h2>
            <h2>Maurizio Toffoletti,  sculptures </h3>
            <div class="presentation-informations">
                <p class="date">4 Février - 16 Mars 2021</p>
                <div class="presentation-informations-buttons">
                    <a href="#"class="item-link">Download Invitation</a>
                    <a href="#"class="item-link">Download Press Release</a>
                </div>
            </div>
        </article>

        <article class="exhibitions-presentation-full-image">
            <img src="/wp-content/uploads/2020/11/balm_couv_reduze.jpg" alt="">
        </article>

        <article class="exhibitions-presentation-four-images">
            <img src="/wp-content/uploads/2020/11/balm_couv_reduze.jpg" alt="">
            <img src="/wp-content/uploads/2020/11/balm_couv_reduze.jpg" alt="">
            <img src="/wp-content/uploads/2020/11/balm_couv_reduze.jpg" alt="">
            <img src="/wp-content/uploads/2020/11/balm_couv_reduze.jpg" alt="">
        </article>

        <article class="article-introduction">
            <header class="entry-header">
                <h4>Past expositions</h4>
            </header>
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

        <article class="exhibitions-past-exhibition">

            <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>

            <div class="entry-content container-press">
                <h2>Sculpture à l'Assemblée Nationale</h2>
                <p class="press-item-date">Joëlle Rostkowski, November, 12 2020</p>
                <a class="item-link" href="#">View The Article</a>
                <p class="press-item-texte">La Promesse de Bonheur, sculpture monumentale de Maria PAPA Rostkowska (1923-2008) fait partie des acquisitions récentes de l'Assemblée Nationale. Elle a été installée, en juin 2011, au Palais Bourbon juste en face de l'entrée de l'hémicycle. D'une hauteur de plus de trois mètres cette œuvre en marbre blanc de Carrare a été exécutée à Pietrasanta (Italie) par l'artiste en « taille directe » en 1995.</p>
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

        <?php endwhile; endif; ?>

    </main>
</div>

<?php get_footer(); ?>
