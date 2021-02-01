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
                    <h1 class = "dark-color-invert">The Busy Pastor</h1>
                    <button class="btn btn-v1 center">Button 4</button>
                </div>
            </div>
        </div>
    </div>




    <div class="colored-slants">
        <div class="slanted hunger">
            <h1>Hunger</h1>
            <p>According to Second Harvest Food Bank of East TN, 1 in 5 children and 1 in 8 adults are at risk for
                hunger in East Tennessee. This is a total of 160,000 people among us who are food vulnerable. Learn how
                you can make an impact in the lives of hungry people in our community and beyond.</p>
            <div class="giveNow">
                <a href="https://foothillschurch.com/hunger/" class="eventButton" style="width: 270px;"><span>Feed The Hungry </span></a>
            </div>
        </div>
        <div class="slanted gre-2" style="background-color: red;">
            <h1>Thirst</h1>
            <p>Across the world there are millions of people who are affected by unclean drinking water every single
                day. Hundreds of children die or are orphaned daily because the only water they have access to is dirty
                water. This is entirely preventable. There are thousands of people in America who are affected by
                natural disasters every year and need clean drinking water. Learn how you can support those who are
                thirsty in the US and around the world.</p>
            <div class="giveNow">
                <a href="https://foothillschurch.com/thirst/" class="eventButton" style="width: 290px;"><span>Provide Clean Water </span></a>
            </div>
        </div>
    </div>

</div>



<?php get_footer();
