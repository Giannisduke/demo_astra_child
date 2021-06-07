<?php
/**
* Template Name: Page Template 1
*/

get_header(); ?>

<main>
<!-- Section 2 Start -->
    <section class="hero">
        <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-12 text-center">
                <h1><?php echo get_the_title(); ?></h1>
                <p>Web Developer</p>
              </div>
            </div>
        </div>
    </section>
<!-- Section 1 End -->
<!-- Section 2 Start -->
    <section class="profile">
        <div class="container h-100">
            <div class="row h-100 justify-content-start align-items-center">
                <div class="col-12 col-lg-6 text-center">
                    <div class="image_wrapper">
                        <img class="image_profile" src="" />
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="container h-100">
                        <div class="row h-100 justify-content-start align-items-center">
                            <div class="d-flex h-75 flex-column align-items-start">
                                <h2>Όνομα Επίθετο</h2>
                                <span>Web Developer</span>
                                <p>Text</p>
                                <button type="button" class="btn btn-primary mt-auto">Primary</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Section 2 End -->
<!-- Section 3 Start -->
    <section class="services p-5 text-center">
        <div class="container h-100">
            <h2 class = "p-5">Services</h2>
            <div class="row h-100 justify-content-around align-items-center">
                <article class="col-lg-4 text-center test">
                    <h5>Προγραμματισμός</h5>
                </article>
                <article class="col-lg-4 text-center test">
                    <h5>Σχεδίαση</h5>
                </article>
                <article class="col-lg-4 text-center test">
                    <h5>Web Design</h5>
                </article>
                <article class="col-lg-4 text-center test">
                    <h5>Φωτογραφία</h5>
                </article>
                <article class="col-lg-4 text-center test">
                    <h5>Video</h5>
                </article>
                <article class="col-lg-4 text-center test">
                    <h5>Εφαρμογές</h5>
                </article>
            </div>
        </div>
    </section>
<!-- Section 3 End -->
</main>

<?php get_footer(); ?>
