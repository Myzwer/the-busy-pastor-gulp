<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage A Busy Theme
 * @since 1.0.0
 */

get_header(); ?>


    <div class="content overflow-hidden">
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x full-background background-desktop-adjust"
                 style="background: url(http://the-busy-pastor.local/wp-content/uploads/2021/02/Background-Texture.jpg);  background-position: center center;">
                <div class="show-for-desktop">
                    <div class="absolute large-logo">
                        <img src="http://the-busy-pastor.local/wp-content/uploads/2021/02/BP-logo.png" alt="">
                    </div>
                </div>

                <div class="small-12 cell z-index-1">
                    <div class="padding-top lr-padding">
                        <div class="grid-x">
                            <div class="small-10 medium-3 large-1 cell">
                                <h1 class="dark-color-invert large-title">The Busy Pastor</h1>
                            </div>

                            <div class="small-12 cell">
                                <div class="grid-x">
                                    <div class="medium-8 large-10 cell">
                                        <h3 class="dark-color-invert">Encouraging and equipping pastors to be busy with the right things.</h3>
                                        <p class="dark-color-invert">Nam viverra risus sed erat cursus, at euismod ante
                                            lacinia. Pellentesque mauris mi, vehicula eget enim a, viverra bibendum
                                            tortor. Curabitur lacus dolor, feugiat in dolor quis, ultricies condimentum
                                            ex. Vestibulum semper elit tortor, et aliquet metus pulvinar dignissim.
                                            Nulla varius mi id libero accumsan vehicula. Integer nec elementum est.</p>
                                        <a href="<?php the_field('button_url'); ?>"><button class="btn btn-v1"><span class="icon-icons8-play"></span> Watch Now
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="slanted slant-light margin-pull-large">
            <div class="grid-x grid-padding-x">
                <div class="small-12 cell">
                    <h2 class = "left">About Us</h2>
                </div>

                <div class="small-12 medium-6 cell center">
                    <div class="padding-top-sm">
                        <img class="mobile-image"
                             src="http://the-busy-pastor.local/wp-content/uploads/2021/02/Pastor-Trent-Rounded-No-Border.png"
                             alt="">
                    </div>

                    <h2 class="center name-title">Dr. Trent Stewart</h2>
                    <h4 class="subtitle">Lead Pastor, Foothills Church</h4>
                    <div class="social-icons">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-instagram-square"></i>
                        <i class="fab fa-twitter-square"></i>
                    </div>
                    <p class="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat metus id
                        nulla rutrum, nec consequat
                        arcu porta. Aenean egestas mattis mauris, quis fermentum nulla condimentum ac. Duis vel risus
                        placerat,
                        ullamcorper mi et, varius justo. Integer eu erat ut nibh mollis tempus sed at velit. Sed ac
                        lectus mattis,
                        suscipit est vel, laoreet elit. Curabitur venenatis pretium venenatis. Ut eget volutpat magna,
                        eget ultrices
                        mi.</p>
                </div>


                <div class="small-12 medium-6 cell center">
                    <div class="padding-top-sm">
                        <img class="mobile-image"
                             src="http://the-busy-pastor.local/wp-content/uploads/2021/02/Pastor-Greg-Rounded-No-Border.png"
                             alt="">
                    </div>

                    <h2 class="center name-title">Greg Gibson</h2>
                    <h4 class="subtitle">Church Planting Leader</h4>
                    <div class="social-icons">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-instagram-square"></i>
                        <i class="fab fa-twitter-square"></i>
                    </div>
                    <p class="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat metus id
                        nulla rutrum, nec consequat
                        arcu porta. Aenean egestas mattis mauris, quis fermentum nulla condimentum ac. Duis vel risus
                        placerat,
                        ullamcorper mi et, varius justo. Integer eu erat ut nibh mollis tempus sed at velit. Sed ac
                        lectus mattis,
                        suscipit est vel, laoreet elit. Curabitur venenatis pretium venenatis. Ut eget volutpat magna,
                        eget ultrices
                        mi.</p>
                </div>
            </div>
        </div>


        <div class="slanted slant-dark">
            <div class="grid-x">
                <div class="small-12 medium-6 left cell">
                    <h2 class="dark-color-invert">Trying to be busy with the right things? Join the community!</h2>
                    <h3 class="dark-color-invert">Sign up for exclusive Busy Pastor content and resources!</h3>
                </div>

                <div class="small-12 medium-12 cell left">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </div> <!--End Content, MUST BE last-->


<?php get_footer();
