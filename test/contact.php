<?php /*Template Name: contact*/ get_header(); ?>

<main class="bg-color-contact">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 align-self-center">
                <div class="iframe-container">
                    <iframe width="700" height="550"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19727.780317144643!2d5.86413625!3d51.8249321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1snl!2snl!4v1662560270098!5m2!1snl!2snl"
                        style="border: 0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <?php echo do_shortcode('[contact-form-7 id="252"]') ?>
            </div>
        </div>
    </div>

    <div class="spacer"></div>
</main>
<?php get_footer(); ?>