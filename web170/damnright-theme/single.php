<?php get_header(); ?>

<?php get_sidebar(); ?>


<div id="content" class="two-thirds left">
<?php if(have_posts()) : while(have_posts()) : the_post(); // start the loop ?>
		<article id="post-<?php the_ID(); ?>" class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
        <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
		<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>            
        <?php the_content(''); ?>
<?php endwhile; endif; // end the loop ?>
<small>single.php</small>
</article>
</div>		<!--close content-->

<p class="top-link"><a href="#nav-main">Back to top</a></p>

<?php get_footer(); ?>