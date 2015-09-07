<?php
/*
Template Name: Slider Page
*
* The template for displaying slider
* 
*/

get_header(); ?>
<?php get_header(); ?>
<!-- page php -->



<article class="article">
<?php 
if (have_posts()) :
   while (have_posts()) :
      the_post();
	  ?>
      <h2><?php the_title(); ?></h2>
      <?php   the_content();
   endwhile;
endif;
?>
</article>
<script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,

                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

                $ArrowKeyNavigation: true,   			            //Allows arrow key to navigate or not
                $SlideWidth: 600,                                   //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                $SlideSpacing: 0, 					                //Space between each slide in pixels
                $DisplayPieces: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 100,                                //The offset position to park slide (this options applys only when slideshow disabled).

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 800));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; top: 0px; left: 100px; width: 800px;
        height: 300px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 300px;
            overflow: hidden;">
            <div><img u="image" src="http://localhost/wordpress/wp-content/themes/example/images/falls.jpg" /></div>
            <div><img u="image" src="http://localhost/wordpress/wp-content/themes/example/images/falls_palms.jpg" /></div>
            <div><img u="image" src="http://localhost/wordpress/wp-content/themes/example/images/meerkat.jpg" /></div>
            <div><img u="image" src="http://localhost/wordpress/wp-content/themes/example/images/falls.jpg" /></div>
            <div><img u="image" src="http://localhost/wordpress/wp-content/themes/example/images/falls_palms.jpg" /></div>
            <div><img u="image" src="http://localhost/wordpress/wp-content/themes/example/images/meerkat.jpg" /></div>
        </div>
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 13 css */
            /*
            .jssora13l                  (normal)
            .jssora13r                  (normal)
            .jssora13l:hover            (normal mouseover)
            .jssora13r:hover            (normal mouseover)
            .jssora13l.jssora13ldn      (mousedown)
            .jssora13r.jssora13rdn      (mousedown)
            */
            .jssora13l, .jssora13r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 50px;
                cursor: pointer;
                background: url(../img/a13.png) no-repeat;
                overflow: hidden;
            }
            .jssora13l { background-position: -10px -35px; }
            .jssora13r { background-position: -70px -35px; }
            .jssora13l:hover { background-position: -130px -35px; }
            .jssora13r:hover { background-position: -190px -35px; }
            .jssora13l.jssora13ldn { background-position: -250px -35px; }
            .jssora13r.jssora13rdn { background-position: -310px -35px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora13l" style="top: 123px; left: 30px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora13r" style="top: 123px; right: 30px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->


<?php get_footer(); ?>