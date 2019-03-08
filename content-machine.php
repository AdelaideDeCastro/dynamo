<?php 
    /*
    *   Template Name: Machine Content
    *
    *   @package Dynamo
    */
?>
    <div class="row single-machine-info">
        <div class="col-12 col-md-6">
            <?php if(has_post_thumbnail($post->ID)) : ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'wpcf-machine-image' ); ?>
                <div class="image-bg-behavior" style="background-image:url('<?=  $image[0]; ?>')"></div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6">
            <div class="machine-information mt-5">
                <?php
                    the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h3>');
                ?>
                <ul>
                    <?php
                        $machineInfo = get_post_meta(get_the_ID(), 'wpcf-machine-general-info', false);
                        foreach($machineInfo as $key => $value) :
                    ?>
                    <li><?= $value; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
