<?php
/**
* Template Name: Posts Page
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @since 1.0
* @version 1.0
*/

get_header(); ?>

    <div class="content">
        <div class="grid-container inverted-background header-height full-width">
            <div class="grid-x padding-top">
                <div class="small-12 medium-6 cell">
                    <h2><?php the_title(); ?></h2>
                </div>

                <div class="small-12 medium-5 cell">
                    <div class="video-container">
                        <?php the_field('video_link'); ?>
                    </div>
                </div>

                <div class="small-12  cell padding-top">
                    <h3>Episode <?php the_field("episode_number"); ?></h3>
                    <p>Nam viverra risus sed erat cursus, at euismod ante
                        lacinia. Pellentesque mauris mi, vehicula eget enim a, viverra bibendum
                        tortor. Curabitur lacus dolor, feugiat in dolor quis, ultricies condimentum
                        ex. Vestibulum semper elit tortor, et aliquet metus pulvinar dignissim.
                        Nulla varius mi id libero accumsan vehicula. Integer nec elementum est.</p>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
