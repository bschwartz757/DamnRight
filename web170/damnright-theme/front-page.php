<?php get_header(); ?>

<div id="content">

<section class="one-third left">
<!-- Loop 1 -->
<h2>About Us</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(''); ?>
    <?php endwhile; endif; ?>
<!-- End Loop 1 -->
<small>front-page.php</small>
 </section>
 
<section class="one-third left">    
<!-- Loop 2 -->  
<h2>Latest Posts</h2>
<?php rewind_posts(); ?>
<?php query_posts('showposts=3'); ?>
  <ul>
  <?php while(have_posts()) : the_post(); ?>
    <li><a href="#"<?php the_title(); ?></a></li>
    <?php the_excerpt(); ?>
  <?php endwhile; ?> 
  </ul>
<!-- End Loop 2 --> 
</section>  

<section class="one-third right"> 
	<h2>Blake Schwartz</h2>
    <h4>Address:</h4>
    <p>555 fake st.</p>
    <p>Seattle, WA 98xxx</p>
</section>

<?php /*?><?php if(have_posts()) : while(have_posts()) : the_post(); // start the loop ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>     
        <?php the_content(); ?>
<?php endwhile; endif; // end the loop ?><?php */?>

</div>		<!--close content-->


<p class="top-link"><a href="#nav-main">Back to top</a></p>

<?php get_footer(); ?>