<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class(); ?>>
    <!-- <div class="page-container"> -->
    <section>
        <header>
            <nav class="page-nav">
                <span class="page-nav__logo">Health AI</span>
                <i id="page-nav__mobile-button" class="fa-solid fa-bars"></i>
                <ul class="page-nav__list">
                    <li><a href="<?php echo site_url("/about") ?>">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li style="position: relative;"><a href="<?php echo site_url("/product") ?>">Product</a><button class="page-nav__dropdown-button" id="dropdown-button"><i class="fa-solid fa-angle-down"></i></button>
                        <ul class="page-nav__dropdown display-none">
                            <li><a href="<?php echo site_url("/product/pricing") ?>">Pricing</a></li>
                            <li><a href="#">Devices</a></li>
                            <li><a href="#">Health Technology</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="page-nav__button"><a href="#">Try Demo</a></button>
            </nav>
        </header>