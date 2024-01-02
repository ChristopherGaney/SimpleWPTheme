<?php

 
get_header(); ?>



<section class="post_container container">
        <div class="post_wrapper">
            <div class="post_content">
                <div class="in_page_social">
                    <a href="https://twitter.com/Charlescode1?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-screen-name="false" data-show-count="false">Follow @Charlescode1</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                 
                <div class="post_content_wrapper">

                   <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                    
                            <?php the_content(); ?>

                        <?php endwhile;?>
                    <?php endif; ?>

                </div>  

            </div>
            
        </div>

</section>



<?php get_footer();