<?php
/**
 * Template Name: Play Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage A Busy Theme
 * @since 1.0.0
 */

get_header(); ?>

    <div class="content">
        <div class="grid-container inverted-background header-height full-width">
            <div class="grid-x">
                <div class="small-12 medium-12 large-offset-1 large-6 cell">
                    <div class="grid-x">
                        <div class="small-2 cell">
                            <h2 class="large-title">The Busy Pastor Podcast</h2>
                        </div>
                    </div>
                    <h3>Be busy with the right things.</h3>
                    <p>The job description of the modern pastor is nothing short of impossible. From managing ministries
                        and budgets, to preaching and counseling every week, to leading a staff and caring for your
                        family, it’s all a recipe for disaster. Join Dr. Trent Stewart and Greg Gibson each week for The
                        Busy Pastor Podcast, where they encourage and equip you to lead like never before. Yes, pastors
                        should be busy, but we want you to be busy with the right things.</p>
                </div>

                <div class="small-12 medium-12 large-4 large-offset-1 button-push cell button-width">
                    <a href="#">
                        <button class="btn btn-v2-dark"> Listen on Apple Podcasts</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-v2-dark"> Listen on Spotify</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-v2-dark"> Listen on Google Podcasts</button>
                    </a>
                    <h3 class="center tiny-font">or anywhere you listen to podcasts!</h3>
                </div>
            </div>
        </div>

        <div class="slanted slant-dark margin-pull-large">
            <div class="grid-x">
                <div class="small-12 cell">
                    <h2 class="left margin-top dark-color-invert">Video Episodes</h2>
                </div>
            </div>

            <div class="margin-top featured-podcast-card">
                <div class="grid-x">
                    <?php $posts_query = new WP_Query('posts_per_page=1');
                    while ($posts_query->have_posts()) : $posts_query->the_post();
                        ?>
                        <div class="small-12 medium-6 cell">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="small-12 medium-6 lr-padding cell">
                            <h2><?php the_title(); ?></h2>
                            <hr>
                            <div  class = "left"><?php the_excerpt(); ?></div>
                            <a class="no-margin" href="<?php the_permalink(); ?>">
                                <button class="center btn btn-v1"><span class="icon-icons8-play"></span> Watch Now
                                </button>
                            </a>
                        </div>

                    <?php endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>

            <div class="add-margin">
                <div class="grid-x grid-padding-x grid-margin-x">
                    <?php
                    if (have_posts()) :while (have_posts()) :
                    the_post();
                    echo "<div class='small-12 medium-6 margin-bottom podcast-card cell'>";
                    ?>

                    <div class="left">
                        <h2><?php the_title(); ?></h2>
                        <h3>Episode X</h3>
                        <p class = "left"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <button class="btn btn-v1"><span class="icon-icons8-play"></span> Watch Now</button>
                        </a>
                    </div>
                </div>

                <?php
                endwhile;
                else:
                    _e('Sorry, no posts matched your criteria.', 'textdomain');
                endif; ?>

            </div>
        </div>
    </div>


<?php get_footer();
