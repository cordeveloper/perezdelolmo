<?php get_header(); ?>
<?php echo get_template_part('template-parts/menu', 'menu', array('bg' => 'primary')); ?>

<main class="main main--top main--grey page-contact" role="main">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="entry entry--high no-after green m-t-xs-4  m-b-2" data-inviewport>
                        <span>
                            <span class="entry__skew"></span>
                            <span class="entry__text">Servicios</span>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <article class="service">
                        <header class="service__header overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/accidentes-trafico.jpg)">
                            <h2>Accidentes de tráfico</h2>
                        </header>
                        <main class="service__content">
                            <p class="service__init">
                                Reclamación judicial y extrajudicial de indemnizaciones 
                                por cualesquiera daños y perjuicios hayan sufrido las víctimas 
                                o los perjudicados de un accidente de circulación, a cuyo pago 
                                está obligado el responsable del siniestro y su compañía aseguradora, 
                                o, en su caso, el Consorcio de Compensación de Seguros, tales como:
                            </p>
                            <ul class="service__list m-t-2">
                                <li class="m-b-1">
                                    <div class="triangle-right"></div>
                                    <div>
                                        Lesiones, secuelas e incapacidades
                                    </div> 
                                </li>
                                <li class="m-b-1">
                                    <div class="triangle-right"></div>
                                    <div>
                                        Daños materiales
                                    </div> 
                                </li>
                                <li class="m-b-1">
                                    <div class="triangle-right"></div>
                                    <div>
                                        Lucro cesante
                                    </div> 
                                </li>
                                <li class="m-b-1">
                                    <div class="triangle-right"></div>
                                    <div>
                                       Paralización de vehiculos profesionales
                                    </div> 
                                </li>
                                <li>
                                    <div class="triangle-right"></div>
                                    <div>
                                       Daños morales
                                    </div> 
                                </li>
                            </ul>
                        </main>
                    </article>
                </div>
                <div class="col-md-6">
                    <article class="service">
                        <header class="service__header overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/services/accidentes-trafico.jpg)">
                            <h2>Responsabilidad civil</h2>
                        </header>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <?php echo get_template_part('template-parts/section-contact'); ?>
</main>

<?php get_footer(); ?>