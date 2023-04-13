<?php get_header(); ?>

                <div class="single_left__item">
                <div class="container">
                    <div class="single_left__item__wrapper">
                    <div class="box__shadow">
                    <h3><?php the_title(); ?></h3>
                     <div class="single_updates__author">
                        <ul>
                        <?php if( have_rows('icon_tags' ) ): ?>

                        <?php while( have_rows('icon_tags')) : the_row();  ?>

                            <?php $sub_value = get_sub_field('icon')?>
                            <?php $tags = get_sub_field('tags')?>
                            <li><i class="<?php echo $sub_value ?>"></i><?php echo $tags ?></li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php
                    $image = get_field('latest_image');
                    if(!empty($image)):
                    ?>

                    <img src="<?php echo esc_url($image['url']) ?>" alt="">

                    <?php endif; ?>
                    <div class="single_updates__text">
                        <p><?php echo get_field('latest__content')?></p>
                        <p><?php echo get_field('main_content')?></p>

                    </div>
                    </div>
                    </div>
                </div>
                </div>

<?php get_footer(); ?>