<?php get_template_part('template-parts/header/header'); ?>

        <div class="heading">
            <h1><?php echo get_bloginfo('description'); ?></h1>
            <a class="btn btn-full">Contact Us</a>
        </div>
    </header>

    <main class="front-page-content container">
        <section id="section-testimonial">
            <div>
                <h2>We've Created <span class="highlight">Exceptional</span> User Experiences</h2>
                <div class="testimonials">
                    <div>Hello1</div>
                    <div>Hello2</div>
                </div>
            </div>
        </section>

        <section>
            <div>
                <h2>We Improve Any Digital Product</h2>
                <p>Whether you have a corporate website, intranet, e-commerce platform or piece of software.</p>
            </div>
            <div>

            </div>
        </section>

        <section>
            <div>

            </div>
            <div>
                <h2>The Size Of Your Company Doesn't Matter</h2>
                <p>As a long-term partner, we have helped Het Urbanhuis through the growing pains of starting up.</p>
                <p>Reducing bounce rates by <span class="highlight">23%</span> and increasing the visit time of users by <span class="highlight">29%</span>.</p>
                <a href="#" class="btn btn-outline">Read The Story</a>
            </div>
        </section>

        <section id="section-how">
            <div>
                <h2>How Do We Get Results</h2>
                <p>It is about understanding your users better than they understand themselves.</p>
                <p>Tweaking your interface and products so your customers will keep coming back for more.</p>
            </div>
        </section>

        <section>
            <div>
                <h2>What We Can Do For You</h2>
                <p>We look at the most important improvements and start there. This can mean <span class="highlight">usability engineering</span>, improving the <span class="highlight">information architecture</span>, <span class="highlight">graphic design</span>, <span class="highlight">interaction design</span class="highlight">, and more. We always use analytics to give you tangible results.</p>
                <a href="#" class="btn btn-outline">Learn More</a>
            </div>
            <div>

            </div>
        </section>

        <section id="section-contact">
            <div>
                <h2>Contact Us Now</h2>
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="27" title="Contact Form"]'); ?>
                </div>
            </div>
        </section>
    </main>

<?php get_template_part('template-parts/footer/footer'); ?>