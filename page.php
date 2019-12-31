<?php get_template_part('template-parts/header/header'); ?>

    </header>

    <?php if (have_posts()) {
        the_post(); ?>

        <main class="container">
            <section class="section-title align-center">
                <h1><?php the_title(); ?></h1>
            </section>

            <section>
                <?php the_content(); ?>
            </section>
        </main>

    <?php } ?>

<?php get_template_part('template-parts/footer/footer'); ?>