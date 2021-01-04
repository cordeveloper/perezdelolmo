
<?php get_header(); ?>
<?php echo get_template_part('template-parts/menu', 'menu', array('bg' => 'primary')); ?>
<?php
    $equipo = pdo_get_team_members();
?>

<main class="main main--top main--grey" role="main">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="entry entry--high no-after green m-t-xs-4  m-b-4" data-inviewport>
                        <span>
                            <span class="entry__skew"></span>
                            <span class="entry__text">Equipo</span>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--grey">
        <div class="container">

           
            <div class="row">
                <?php foreach($equipo as $team): ?>
              
                <div class="col-xs-12 col-sm-6 m-b-xs-2 m-b-md-0 col-md-3">
                    <a class="person-card__link" href="<?php echo get_permalink($team->ID); ?>"> 
                        <article class="person-card">
                            <header class="person-card__header" style="background-image: url(<?php echo get_field('team_imagen', $team->ID, true)['url']; ?>)">
                                
                            </header>
                            <footer class="person-card__footer">
                                <h2 class="person-card__name"><?php echo get_field('team_nombre', $team->ID); ?></h2>
                                <div class="person-card__job"><?php echo get_field('team_status', $team->ID); ?></div>
                            </footer>
                        </article>
                    </a>
                </div>
                <?php endforeach; ?>
               
                <div class="col-xs-12 m-b-xs-2 m-b-md-0 col-sm-6 col-md-3">
                    <article class="person-card">
                        <header class="person-card__header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/equipo/sarin.jpg)">
                            
                        </header>
                        <footer class="person-card__footer">
                            <h2 class="person-card__name">María Rosario Díaz Pérez</h2>
                            <div class="person-card__job"></div>
                        </footer>
                    </article>
                </div>
                <div class="col-xs-12 m-b-xs-2 m-b-md-0 col-sm-6 col-md-3">
                    <article class="person-card">
                        <header class="person-card__header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/equipo/maribel.jpg)">
                            
                        </header>
                        <footer class="person-card__footer">
                            <h2 class="person-card__name">María Isabel Díaz Pérez</h2>
                            <div class="person-card__job"></div>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part('template-parts/section-contact'); ?>
</main>


<?php get_footer(); ?>