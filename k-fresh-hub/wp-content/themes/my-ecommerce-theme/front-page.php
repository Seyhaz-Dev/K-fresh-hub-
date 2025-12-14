<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">


<section class="home-hero"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ok.jpg');">
    
    <h1>Welcome to Our Website</h1>
    <p>Fresh products and quality service for everyone</p>
    <a href="<?php echo site_url('/about'); ?>" class="btn">
        Shop Now 
    </a>
</section>



<section class="home-about">
    <h2>About Us</h2>
    <p>
        We are students learning WordPress and PHP.
        This website is built as a custom theme.
    </p>
</section>


<section class="home-features">
    <h2>Why Choose Us?</h2>

    <div class="feature-box">
        <h3>Fast</h3>
        <p>Our website is simple and fast.</p>
    </div>

    <div class="feature-box">
        <h3>Fresh</h3>
        <p>We provide fresh and quality products.</p>
    </div>

    <div class="feature-box">
        <h3>Trusted</h3>
        <p>Built with care and responsibility.</p>
    </div>
</section>

<?php get_footer(); ?>
