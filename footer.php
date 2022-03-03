<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_theme
 */

?>

<footer>
        <div class="container">
            <div class="align-items-center justify-content-between row">
                <div class="col-lg-4">
                    <a class="footer-brand" href="/">
                   <img src="<?php the_field('footer_logo', 'option'); ?>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="footer-links">
                        <div class="menu-footer-1-container">
                            <ul class="menu">
                                <li id="menu-item-218">
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Experts</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Professionals</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Practices</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Data Science Center</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Insights</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bottom-footer-module">
            <div class="row">
                <div class="col-lg-5">
                    <div class="foo-logo-container">
                        <div class="footer-text-block">
                            <p>Copyright © 2021 Cornerstone Research All Rights Reserved. Terms of Use | Privacy Policy</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bottom-flex-block">
					<?php if( have_rows('footer_buttons','option') ){ ?>
             	<div class="footer-button-container">
              <?php while( have_rows('footer_buttons','option') ){ the_row();?>
                       <a href="#" class="btn btn-primary grd-btn">Europe</a>
					   <?php } ?>
			  </div>
			  <?php } ?>
                        <div class="foo-social-container">
                            <ul>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

        </div>

    </footer>


<?php wp_footer(); ?>

</body>
</html>
