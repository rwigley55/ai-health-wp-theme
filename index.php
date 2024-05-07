<?php get_header(); ?>
<div class="section-container">
    <h1 class="homepage__heading">Manage your health easily.</h1>
    <p class="homepage__subheading">An AI-powered healthcare platform that provides patients and healthcare professionals better medical records, diagnoses, and treatment plans management.</p>
    <p class="homepage__company-tray-heading">Trusted by the best</p>
    <p class="homepage__company-tray-heading">Placeholder#1 Placeholder#2 Placeholder#3 Placeholder#4 Placeholder#5</p>
    <h2 class="homepage__card-heading">Why Lativ</h2>
    <div class="homepage__card-tray">
        <div class="homepage__card-one">
            <img src="<?php echo get_theme_file_uri("/images/homepage__card-image-1.webp") ?>" alt="">
            <h3>Medical Records Management</h3>
            <p>Easily access and share medical records with your healthcare professional, ensuring more efficient care.</p>
        </div>
        <div class="homepage__card-two">
            <img src="<?php echo get_theme_file_uri("/images/homepage__card-image-2.webp") ?>" alt="">
            <h3>Diagnosis Assistance</h3>
            <p>Our AI algorithms analyze your data to provide accurate diagnosis assistance to healthcare professionals.</p>
        </div>
        <div class="homepage__card-three">
            <img src="<?php echo get_theme_file_uri("/images/homepage__card-image-3.webp") ?>" alt="">
            <h3>Personalized Treatment Plans</h3>
            <p>By tailoring treatment plans to your specific needs, Lativ helps improve outcomes and incrlativ your health.</p>
        </div>
    </div>
</div>
</section>
<section>
    <div class="section-container-two">
        <div>
            <img class="homepage__headshot" src="<?php echo get_theme_file_uri("/images/homepage__ceo-headshot.webp") ?>" alt="">
        </div>
        <div class="homepage__headshot-description">
            <h2>“Lativ has never been a concern since day one. It takes care of everything for you, so you can focus on the important things”</h2>
            <p>Valerie Thompson <br />
                CEO, Marathon
            </p>
            <button class="homepage__headshot-button"><a href="#">View Case Study</a></button>
        </div>
    </div>
</section>
<section>
    <div class="section-container-three">
        <div style="order: 2;">
            <img class="homepage__product" src="<?php echo get_theme_file_uri("/images/homepage__product.jpg") ?>" alt="">
        </div>
        <div style="order: 1;" class="homepage__product-description">
            <h2>Get the full experience with Health AI Tracker</h2>
            <p>
                With Health AI Tracker, you’re able to measure physical data such as blood pressure, cholesterol levels, blood glucose levels, your menstrual cycle and so much more.
            </p>
            <button class="homepage__product-button"><a href="#">Explore the Product</a></button>
        </div>
    </div>
    <?php get_footer(); ?>