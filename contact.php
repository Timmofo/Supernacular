<?php /* Template Name: Contact */ ?>

<?php get_template_part('template-parts/header/header'); ?>

    </header>

    <main class="container">
        <section id="section-contact">
            <div>
                <h1>Contact Us Now</h1>
                <!-- <h3>And Start Growing Your Business Today</h3> -->
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="27" title="Contact Form"]'); ?>
                </div>
            </div>
        </section>
    </main>

<?php get_template_part('template-parts/footer/footer'); ?>