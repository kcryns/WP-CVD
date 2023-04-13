<?php

/**
 * template name: About
 * 
 */

?>
<?php get_header(); ?>

<section class="About-me">
    <div class="container">
        <div class="aboutme__wrapper">
            <div class="aboutme__TEXT">
                <div class="about--text">
                    <h3><?php echo get_field('aboutpage_tag'); ?></h3>
                    <h1><?php echo get_field('aboutpage_title'); ?></h1>
                    <p><?php echo get_field('aboutpage_content'); ?></p>
                    <p><?php echo get_field('aboutpage_content'); ?></p>
                </div>
                <div class="about--icon">
                    <ul>
                        <li>
                        <?php if( have_rows('aboutpage_icons') ): ?>

                        <?php while( have_rows('aboutpage_icons')) : the_row();  ?>

                            <?php $sub_value = get_sub_field('icons')?>
                            <?php $link = get_sub_field('aboutpage_link')?>

                            <a href="<?php echo $link ?>"><i class="<?php echo $sub_value ?>"></i></a>

                            <?php endwhile; ?>
                         <?php endif; ?>
                    </ul>
                </div>
            </div>
            
            <?php
                $image = get_field('aboutpage_image');
                if(!empty($image)):
                ?>

                <img src="<?php echo esc_url($image['url']) ?>" alt="">

                <?php endif; ?>          
        </div>
    </div>
    <div class="down">
    <a href=""><i class="fa-solid fa-angle-down"></i></a>
    </div>
</section>
<section class="projects">
    <div class="container">
        <div class="project__text">
                <h2><?php echo get_field('project_title'); ?></h2>
                <p><?php echo get_field('project_paragraph'); ?></p>
            </div>
        <div class="project__wrapper">
        <?php

            $args = array(
                'post_type' => 'RecentProjects',
                'posts_per_page' => 6,

            );

            $newQuery = new WP_Query($args)

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
            <div class="project__card">               
                    <?php echo get_the_post_thumbnail(); ?>
                    <div class="cards__text">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>                
            </div>
            <?php 
                
            endwhile;
                else:
                    echo "no available post";
                endif;
                wp_reset_postdata();
                
                ?>
        </div>
    </div>
</section>
<?php include 'contactsection.php';?>

<?php get_footer(); ?>