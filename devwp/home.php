<?php
/**
 * Template Name: Blog
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Yestau
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
                    <button class="btn btn-v2-dark"> Listen on Apple Podcasts</button>
                    <button class="btn btn-v2-dark"> Listen on Spotify</button>
                    <button class="btn btn-v2-dark"> Listen on Google Podcasts</button>
                </div>
            </div>
        </div>

    <div class="slanted slant-dark margin-pull-large">
        <div class="grid-x">
            <div class="small-12 cell">
                <h2 class = "left dark-color-invert">Video Episodes</h2>
            </div>
        </div>

    <div class="grid-x grid-padding-x">
        <div class="small-12 podcast-card cell">
            <h2>Podcast Title</h2>
            <h3>Episode 1</h3>
            <p>Nam viverra risus sed erat cursus, at euismod ante
                lacinia. Pellentesque mauris mi, vehicula eget enim a, viverra bibendum
                tortor. Curabitur lacus dolor, feugiat in dolor quis, ultricies condimentum
                ex. Vestibulum semper elit tortor, et aliquet metus pulvinar dignissim.
                Nulla varius mi id libero accumsan vehicula.</p>
            <button class="btn btn-v1"><span class="icon-icons8-play"></span> Watch Now
            </button>
        </div>
    </div>
    </div>

        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <?php
                if (have_posts()) :
                while (have_posts()) :
                the_post();
                echo "<div class='small-12 large-6 cell'>";
                ?>

                <div class='blog-card'>
                    <a href="<?php the_permalink(); ?>">


                        <?php
                        echo "<div class = 'card-thumbnail'>";
                        the_post_thumbnail();
                        echo "</div>";

                        echo "<div class='card-cat'>";

                        the_tags('', ', ', '<br />');

                        echo "</div>";

                        echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';

                        the_excerpt('<p class = "blog-excerpt">', '</p>');


                        echo "<div class = 'card-details'>";

                        echo "<span class='card-name'>";
                        the_author();
                        echo "</span>";
                        echo " | ";

                        echo "<span class='card-date'>";
                        echo get_the_date();
                        echo "</span>";


                        echo "</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        endwhile;
                        else:
                            _e('Sorry, no posts matched your criteria.', 'textdomain');
                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
