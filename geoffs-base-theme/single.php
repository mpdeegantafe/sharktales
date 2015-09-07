<?php get_header();?>
<!-- 
the following two divs contain background images
They use absolute positioning and CSS to control how and where they appear on the page
-->
<div id="underlay"></div> 
<div id="overlay"></div>

<article itemscope itemtype="http://schema.org/Article">
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
	  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span itemprop="name"> <?php the_title(); ?></span></a></h2>
     <span itemprop="articleBody"> 
	<?php   the_content(); ?></span>
	<p rel="author">By <span itemprop="author" itemscope itemtype="http://schema.org/Person">
<span itemprop="name"><?php the_author(); ?></span></span></p>

 <?php  endwhile;
endif;
?> 
</article>

<?php get_footer(); ?>