<?php get_header(); ?>
<?php echo get_template_part('template-parts/menu', 'menu', array('bg' => 'primary')); ?>

<main class="main main--top" role="main">
    <div class="container container--min">
        <div class="row">
            <div class="col-xs-12">
                <section class="profile m-t-4 m-b-2">
                    <div class="profile__image">
                       <img src="<?php echo get_field('team_imagen')['url']; ?>" alt="Rafael Pérez del Olmo"> 
                    </div>
                    <div class="profile__info p-l-1">
                        <h1 class="profile__name"><?php  echo get_field('team_nombre'); ?></h1>
                        <h1 class="profile__status"><?php  echo get_field('team_status'); ?></h1>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 editor">
               <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php echo get_template_part('template-parts/section-contact', 'section-contact', array('bg' => 'white')); ?>
</main>

<?php get_footer(); ?>