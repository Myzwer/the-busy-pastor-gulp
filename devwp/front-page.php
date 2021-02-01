<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>



<div class="content">
    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background" style = "background: url(http://the-busy-pastor.local/wp-content/uploads/2021/02/Background-Texture.jpg);  background-position: center center;">
            <div class="large-12 cell">
                <div class="padding-top">
                    <h1 class = "dark-color-invert large-title">The Busy Pastor</h1>
                    <h3 class = "dark-color-invert">Be busy with the right things.</h3>
                    <p class = "dark-color-invert">Nam viverra risus sed erat cursus, at euismod ante lacinia. Pellentesque mauris mi, vehicula eget enim a, viverra bibendum tortor. Curabitur lacus dolor, feugiat in dolor quis, ultricies condimentum ex. Vestibulum semper elit tortor, et aliquet metus pulvinar dignissim. Nulla varius mi id libero accumsan vehicula. Integer nec elementum est.</p>
                    <button class="btn btn-v1"><span class="icon-icons8-play"></span> Watch Now</button>
                </div>
            </div>
        </div>
    </div>


    <div class="slanted slant-light margin-pull-large">
        <h2>The Busy Pastors</h2>
        <div class="center">
            <div class="padding-top-sm">
                <img class = "mobile-image" src="http://the-busy-pastor.local/wp-content/uploads/2021/02/Pastor-Trent-Rounded-No-Border.png" alt="">
            </div>

            <h2 class = "center name-title">Dr. Trent Stewart</h2>
            <h4 class = "subtitle">Lead Pastor, Foothills Church</h4>
            <div class="social-icons">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat metus id nulla rutrum, nec consequat
            arcu porta. Aenean egestas mattis mauris, quis fermentum nulla condimentum ac. Duis vel risus placerat,
            ullamcorper mi et, varius justo. Integer eu erat ut nibh mollis tempus sed at velit. Sed ac lectus mattis,
            suscipit est vel, laoreet elit. Curabitur venenatis pretium venenatis. Ut eget volutpat magna, eget ultrices
            mi.</p>
        </div>

        <div class="center padding-top">
            <div class="padding-top-sm">
                <img class = "mobile-image" src="http://the-busy-pastor.local/wp-content/uploads/2021/02/Pastor-Greg-Rounded-No-Border.png" alt="">
            </div>

            <h2 class = "center name-title">Greg Gibson</h2>
            <h4 class = "subtitle">Chuch Planter, The World</h4>
            <div class="social-icons">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat metus id nulla rutrum, nec consequat
                arcu porta. Aenean egestas mattis mauris, quis fermentum nulla condimentum ac. Duis vel risus placerat,
                ullamcorper mi et, varius justo. Integer eu erat ut nibh mollis tempus sed at velit. Sed ac lectus mattis,
                suscipit est vel, laoreet elit. Curabitur venenatis pretium venenatis. Ut eget volutpat magna, eget ultrices
                mi.</p>
        </div>
    </div>


</div>



<?php get_footer();
