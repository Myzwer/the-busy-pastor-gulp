<?php
/**
 * Template Name: Blog
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
                <div class="small-8 cell">
                    <h2 class="large-title">Busy Pastor Podcast</h2>
                </div>
                <div class="small-12 cell">
                    <h3>Be busy with the right things.</h3>
                    <p>Nam viverra risus sed erat cursus, at euismod ante
                        lacinia. Pellentesque mauris mi, vehicula eget enim a, viverra bibendum
                        tortor. Curabitur lacus dolor, feugiat in dolor quis, ultricies condimentum
                        ex. Vestibulum semper elit tortor, et aliquet metus pulvinar dignissim.
                        Nulla varius mi id libero accumsan vehicula. Integer nec elementum est.</p>
                </div>
                <div class="small-12 cell button-width">
                    <a href="#"><button class="btn btn-v2-dark"> Listen on Apple Podcasts</button></a>
                    <a href="#"><button class="btn btn-v2-dark"> Listen on Spotify</button></a>
                    <a href="#"><button class="btn btn-v2-dark"> Listen on Google Podcasts</button></a>
                </div>
            </div>
        </div>

        <div class="slanted slant-dark margin-pull-large">
            <div class="grid-x">
                <div class="small-12 cell">
                    <h2 class="left margin-top dark-color-invert">Video Episodes</h2>
                </div>
            </div>

            <div class="add-margin">
                <div class="grid-x grid-padding-x">
                    <?php
                    if (have_posts()) :while (have_posts()) :
                    the_post();
                    echo "<div class='small-12 margin-bottom podcast-card cell'>";
                    ?>

                    <h2><?php the_title(); ?></h2>
                    <h3>Episode X</h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>">
                        <button class="btn btn-v1"><span class="icon-icons8-play"></span> Watch Now</button>
                    </a>
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
