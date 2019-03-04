<?php
   /*
    *   Template Name: Archive machine
    *
    *   @package Dynamo
    */

    get_header();
?>
<article class="machines">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-uppercase"><?= the_title(); ?></h1>
                </div>
                <?php
                
                    while(have_posts()) : the_post();
                    
                    get_template_part('listing', 'machine');
                
                    endwhile; 
                ?>
            </div>
        </div>
    </section>
</article>
<?php get_footer(); ?>