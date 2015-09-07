<?php get_header(); ?>
<!-- 
the following two divs contain background images
They use absolute positioning and CSS to control how and where they appear on the page
-->
<div id="underlay"></div> 
<div id="overlay"></div>


<article>
<h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
	  <h3>
      
	  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
      
	  <?php the_title(); ?>
      
	  </a>
      
	  </h3>
      <?php the_excerpt();
      
   endwhile;
endif;
?>
</article>
<!--<div class="sidebar">
<?php //get_sidebar(); ?>
</div>-->


<?php get_footer(); ?>