<?php
/* 
    Template Name: Home Page
*/
 get_header(); 
 
 ?>
<section class="main-intro-all">
    <div class="main-intro" "
        style=" background: linear-gradient(rgba(130, 130, 130, 0.5) 100%, rgba(130, 130, 130, 0.5)100%),
        url(<?php the_field('main-intro-bg'); ?>); background-size: cover; background-position: 100px;">
        <div class="container">
            <div class="main-inner">
                <h1 class="main-text">
                    <?php the_field('main-text1'); ?> <br>
                    <?php the_field('main-text2'); ?> <br>
                </h1>
                <p class="main-description">
                    <?php the_field('main-paragraph'); ?>
                </p>
                <div class="main-btn">
                    <a class="contact-btn" href="#"><?php the_field('contact-btn'); ?></a>
                    <a class="read-btn" href="#"><?php the_field('read-btn'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="choose-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-centered">
                <div class="choose-us-content text-intro text-center">
                    <h1><?php the_field('choose-title') ?></h1>
                    <p> <?php the_field('choose-paragraph')?></p>
                </div>
            </div>
        </div>
        <div class="choose-carts">
            <div class="row">
                <?php
                        // check if the repeater field has rows of data
                        if( have_rows('choose_us_properties') ):
                            // loop through the rows of data
                            while ( have_rows('choose_us_properties') ) : the_row(); ?>
                <div class="col-lg-4">
                    <div class="choose-cart">
                        <div class="cart-img">
                            <img src="<?php the_sub_field('property_img'); ?>" alt="">
                        </div>
                        <div class="cart-content">
                            <h3 class="cart-title"><?php the_sub_field('property_title'); ?></h3>
                            <p class="cart-short"><?php the_sub_field('property_short'); ?></p>
                            <p class="cart-description"><?php the_sub_field('property_description'); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                        else :
                            // no rows found
                        endif;
                        ?>
            </div>
        </div>
    </div>
</section>
<section class="properties">
    <div class="container">
        <div class="properties-inner" style="background: #fff url(<?php the_field('properties-bg')?>); background-repeat: no-repeat;
    background-position: right 80%;">
            <div class="row">
                <div class="property-line">
                    <div class="property-number n-first">
                        <h1><?php the_field('property-order-1'); ?></h1>
                    </div>
                    <div class="property-text t-first">
                        <h3><?php the_field('property-title-1')?></h3>
                        <p><?php the_field('property-content-1')?> </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="property-line">
                    <div class="property-number">
                        <h1><?php the_field('property-order-2'); ?></h1>
                    </div>
                    <div class="property-text">
                        <h3><?php the_field('property-title-2')?></h3>
                        <p><?php the_field('property-content-2')?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="property-line">
                    <div class="property-number ">
                        <h1><?php the_field('property-order-3'); ?></h1>
                    </div>
                    <div class="property-text t-last">
                        <h3><?php the_field('property-title-3')?></h3>
                        <p><?php the_field('property-content-3')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-centered">
                <div class="features-content text-intro text-center">
                    <h1><?php the_field('features_title')?></h1>
                    <p><?php the_field('features_paragraph')?></p>
                </div>
            </div>
        </div>
        <div class="features-inner">
            <div class="row">
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('features_boxes') ):
                    // loop through the rows of data
                    while ( have_rows('features_boxes') ) : the_row(); ?>
                <div class="col-lg-4">
                    <div class="features-box">
                        <div class="box-icon">
                            <img src="<?php the_sub_field('features-img'); ?>" alt="">
                        </div>
                        <div class="box-text">
                            <h3><?php the_sub_field('features_title'); ?></h3>
                            <p><?php the_sub_field('features_paragraph'); ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; 
                else :
                    // no rows found
                endif;
                ?>


            </div>
        </div>
    </div>
</section>
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-centered">
                <div class="product-content text-intro text-center">
                    <h1>Choose Your Product</h1>
                    <p>Lorem ipsum dolor sit amet urna eget ullamcorper cras posuere risus quisque quam orci odio
                        orci tempus diam fringilla vivamus enim </p>
                </div>
            </div>
        </div>
        <div class="product-boxes" style="">
            <div class="row justify-content-between">
                <div class="col-md-4 nopadding">
                    <div class="product-box">
                        <img class="product-img" src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-img.png"
                            alt="">
                        <h3 class="product-title">Gear VR BOX</h3>
                        <p class="product-price">$80</p>
                        <a href="#"><img class="product-icon1"
                                src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-icon1.png" alt=""></a>
                        <a href="#"><img class="product-icon2"
                                src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-icon2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4 nopadding">
                    <div class="product-box">
                        <img class="product-img" src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-img.png"
                            alt="">
                        <h3 class="product-title">Gear VR BOX</h3>
                        <p class="product-price">$80</p>
                        <a href="#"><img class="product-icon1"
                                src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-icon1.png" alt=""></a>
                        <a href="#"><img class="product-icon2"
                                src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-icon2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4 nopadding ">
                    <div class="product-box">
                        <img class="product-img" src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-img.png"
                            alt="">
                        <h3 class="product-title">Gear VR BOX</h3>
                        <p class="product-price">$80</p>
                        <a href="#"><img class="product-icon1"
                                src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-icon1.png" alt=""></a>
                        <a href="#"><img class="product-icon2"
                                src="<?php bloginfo( 'template_url' ); ?> ./assets/img/product-icon2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial">
    <div class="container">
        <div class="row">

            <!-- // --- STAR VIEW -- /////////////// -->
            <?php 
                            
                $args = array(
                    'post_type' => 'testimonials' 
                );
                $services = new WP_Query( $args);
                $test = 257;
                // custom_print($services->posts[0]->ID);
                ?>
            <!-- // --- END STAR VIEW -- /////////////// -->

            <div class="col-md-8 col-centered">
                <div class="features-content text-intro text-center">
                    <h1><?php the_field("testimonial_title", $test) ?></h1>
                    <p><?php the_field("testimonial_paragraph", $test) ?></p>
                </div>
            </div>
        </div>
        <div class="review-boxes">
            <div class="row">
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('user_reviews', $test) ):
                        // loop through the rows of data
                        while ( have_rows('user_reviews', $test) ) : the_row(); ?>
                <div class="col-lg-4">
                    <div class="review-box">
                        <img src="<?php the_sub_field('user_img', $test) ?>" alt="">
                        <h5 class="user-name"><?php the_sub_field('user_name', $test) ?></h5>
                        <p><?php the_sub_field('user_paragraph', $test) ?></p>
                        <ul class="user-rate">
                            <?php 
                                $star_numb = get_sub_field("user_rating", $test);
                                $star_rate_user = $star_numb; 
                                for ($i=0; $i < $star_rate_user; $i++) { ?>
                            <li><i class="fas fa-star"></i></li>
                            <?php } ?>

                            <?php $star_rate_user = 5-$star_numb; 
                                for ($i=0; $i < $star_rate_user; $i++) { ?>
                            <li><i class="far fa-star"></i></li>
                            <?php }  ?>
                        </ul>
                    </div>
                </div>
                <?php endwhile;
                    else :
                        // no rows found
                    endif;
                ?>
            </div>
        </div>
</section>
<section class="statistics">
    <div class="container">
        <div class="statistics-inner">
            <div class="statistic-box">
                <span class="count"><?php the_field("statistics_number1") ?></span>
                <p><?php the_field("statistics_title1") ?></p>
            </div>
            <div class="statistic-box">
                <span class="count"><?php the_field("statistics_number2") ?></span>
                <p><?php the_field("statistics_title2") ?></p>
            </div>
            <div class="statistic-box">
                <span class="count"><?php the_field("statistics_number3") ?></span>
                <p><?php the_field("statistics_title3") ?></p>
            </div>
            <div class="statistic-box">
                <span class="count"><?php the_field("statistics_number4") ?></span><span class="count-year"><?php the_field("statistics_year") ?></span>
                <p><?php the_field("statistics_title4") ?></p>
            </div>
        </div>
    </div>
</section>
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-centered">
                <div class="features-content text-intro text-center">
                    <h1><?php the_field("blog_title"); ?></h1>
                    <p><?php the_field("blog_paragraph"); ?></p>
                </div>
            </div>
        </div>
        <div class="blog-inner">
            <div class="row">
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('blog_posts') ):
                        // loop through the rows of data
                    while ( have_rows('blog_posts') ) : the_row(); ?>
                <div class="col-lg-4 col-md-12">
                    <div class="blog-post">
                        <div class="post-date">
                            <p class="date"><?php the_sub_field("blog_date"); ?></p>
                            <p class="month"><?php the_sub_field("blog_month"); ?></p>
                        </div>
                        <img src="<?php the_sub_field("blog_inner_img"); ?>" alt="">
                        <h3 class="post-title"><?php the_sub_field("blog_inner_title"); ?></h3>
                        <p class="post-paragraph"><?php the_sub_field("blog_inner_text"); ?></p>
                        <a class="post-btn" href="#"><?php the_sub_field("blog_inner_btn"); ?>
                            <span>
                                <i class="fas fa-chevron-right"></i>
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <?php endwhile;
                    else :
                        // no rows found
                    endif;
                ?>
 
            </div>
        </div>
    </div>
</section>
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-title">
                    <h3><?php the_field("form_title") ?></h3>
                </div>
                <div class="contact-inner">
                    <form>
                        <label for="name">Full Name</label><br>
                        <input type="text" name="fullname"><br>
                        <label for="email">Email</label><br>
                        <input type="email" name="email"><br>
                        <label for="select">Subject</label>
                        <select>
                            <option value=""></option>
                            <option value="1">Volvo</option>
                            <option value="2">Saab</option>
                            <option value="3">Mercedes</option>
                            <option value="4">Audi</option>
                        </select> <br>
                        <label for="message">Message</label><br>
                        <textarea></textarea> <br>
                        <a class="submit-btn" href="#"><?php the_field("form_btn") ?></a>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 nopadding">
                <div class="contact-img">
                    <img src="<?php bloginfo( 'template_url' ); ?> ./assets/img/contact-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company-info">
    <div class="container">
        <div class="info-inner text-center">
            <div class="row">
                <div class="col-lg-4 nopadding">
                    <div class="company-box company-place ">
                        <img src="<?php bloginfo( 'template_url' ); ?> ./assets/img/home-icon.png" alt="">
                        <p>Uttar Khan, Noyar Para</p>
                        <p>Dhaka-1230</p>
                    </div>
                </div>
                <div class="col-lg-4 nopadding">
                    <div class="company-box company-phone">
                        <img src="<?php bloginfo( 'template_url' ); ?> ./assets/img/phone-icon.png" alt="">
                        <p>+0 857 683 0000</p>
                        <p>+0 948 683 0000</p>
                    </div>
                </div>
                <div class="col-lg-4 nopadding">
                    <div class="company-box company-email">
                        <img src="<?php bloginfo( 'template_url' ); ?> ./assets/img/msg-icon.png" alt="">
                        <p>company@gmail.com</p>
                        <p>ganza@yehoo.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>