<?php /* Template Name: Contact */ ?>

<?php get_template_part('template-parts/header/header'); ?>

    </header>

    <main class="container">
        <section class="section-title align-center">
            <h1>Contact Us Now</h1>
        </section>

        <section id="section-contact">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="27" title="Contact Form"]'); ?>
            </div>
        </section>
    </main>

<?php get_template_part('template-parts/footer/footer'); ?>