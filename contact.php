<?php 

/**
 * Template Name: Contact Page
 */

?>
<?php get_header();?>

<section class="contact__section">
            <div class="container">
                <div class="contact__wrap">
                    <div class="contact__text">
                            <h2>Contact</h2>
                                <p><?php the_content(); ?></p>
                                    <div class="contact__icons">
                                    <?php if( have_rows('contact_tags') ): ?>

                                    <?php while( have_rows('contact_tags')) : the_row();  ?>

                                        <?php $sub_value = get_sub_field('icon')?>
                                        <?php $text = get_sub_field('text')?>
                                        <div> 
                                            <i class="<?php echo $sub_value ?>"></i>
                                            <span><?php echo $text ?></span>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                    </div>
                    <div class="contact__input">
                            <!-- <form action="">
                                <input type="text" placeholder="Name">
                                <br>
                                <input type="email" placeholder="Name">
                                <br>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                <br>
                                <input type="submit" value="Send Message">
                            </form> -->
                            <?php echo do_shortcode('[contact-form-7 id="220" title="Contact form 1"]')?>
                    </div>
                </div>
            </div>
        </section>

 <?php get_footer();?>