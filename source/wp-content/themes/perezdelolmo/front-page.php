<?php get_header(); ?>

<header class="header" role="banner">
  
    <section class="hero">
        <picture class="hero__bg overlay">
            <source media="(max-width: 992px)" srcset="<?php echo get_the_post_thumbnail_url(null, '992x992'); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Diosa Justicia Pérez del Olmo abogados">
        </picture>
        <section class="container hero__container">
            <div class="row">
                <div class="col-xs-12">
                    <section class="hero__legend">
                        <h1 class="hero__legend__high">
                            El valor de<br>
                            la experiencia
                        </h1>
                        <hr class="hero__line">
                        <h2 class="hero__subtitle">
                            Desde hace más de 35 años <br>
                            defendiendo con eficacia los intereses <br>
                            de familias, particulares y empresas <br>
                            en Cantabria.
                        </h2>
                    </section>
                </div>
            </div>
        </section>
    </section>

</header>

<main role="main" class="main">
    HELLO world from front-page
</main>
<?php get_footer(); ?>