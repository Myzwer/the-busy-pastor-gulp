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
        <div class="grid-container inverted-background header-height-single full-width">
            <div class="grid-x padding-top">
                <div class="small-12 medium-6 cell">
                    <h1><?php the_title(); ?></h1>
                </div>

                <div class="small-12 medium-5 cell">
                    <div class="video-container">
                        <?php the_field('video_link'); ?>
                    </div>
                </div>

                <div class="small-12 medium-11 cell padding-top">
                    <h3>Episode <?php the_field("episode_number"); ?></h3>
                    <p><?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?></p>

                    <a href="#">
                        <button class="btn btn-v1 padding-button"><i style="padding-right:2px;" class="fas fa-download"></i> Download the Notes
                        </button>
                    </a>
                </div>
            </div>
        </div>


        <div class="slanted slant-dark margin-pull-large">
            <div class="grid-x grid-margin-x grid-padding-x">
                <div class="small-12 cell">
                    <h2 class="left dark-color-invert">More Episodes</h2>
                </div>

                <div class="small-12 medium-4 cell">
                    <a href="<?php echo get_permalink( get_adjacent_post( true, '', true ) ); ?>"><button class="btn btn-v2-light"> Next Episodes</button></a>
                </div>

                <div class="small-12 medium-4 cell">
                    <a href="/play"><button class="btn btn-v2-light"> All Episodes</button></a>
                </div>


                <div class="small-12 medium-4 cell">
                    <a href="<?php echo get_permalink( get_adjacent_post( false, '', true ) ); ?>"><button class="btn btn-v2-light"> Previous Episodes</button></a>
                </div>

            </div>
        </div>
    </div>

<?php
get_footer();
