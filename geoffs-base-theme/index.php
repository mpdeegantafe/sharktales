<?php get_header(); ?>
<!-- 
the following two divs contain background images
They use absolute positioning and CSS to control how and where they appear on the page
-->
<div id="underlay"></div> 
<div id="overlay"></div>


<article>
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
	  <h2>
      
	  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
      
	  <?php the_title(); ?>
      
	  </a>
      
	  </h2>
      <?php   the_content();
   endwhile;
endif;
?>
</article>
<!--<div class="sidebar">
<?php //get_sidebar(); ?>
</div>-->


<?php get_footer(); ?>