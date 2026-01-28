<?php get_header();  ?>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">

            <main id="id" class="site-main">
                <h1>Blog</h1>

                <div class="container">
                    <div class="blog-item">

                    <?php
                    if(have_posts()):
                        while(have_posts()): the_post(); 
                        get_template_part('parts/content');
                    endwhile;

                    ?>
                    <div class="wpdevs-pagination">
                        <div class="pages new">

                        <?php previous_posts_link('<<Newer Posts'); ?>
                        </div>
                       
                        <div class="pages old">
                        <?php previous_posts_link('<<Older Posts'); ?>


                        </div>
                    </div>

                    <?php 
                        else:
                        ?>
                            <p>Nothing yet to be displayed!</p>

                            <?php endif; ?>
                    



                    </div>
                    <?php  get_sidebar();  ?>
                </div>
            </main>
    </div>
    </div>



<?php get_footer();  ?>