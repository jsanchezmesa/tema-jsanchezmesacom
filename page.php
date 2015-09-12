<?php get_header(); ?>

<section class="section-main" id="main">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<article class="articulo">

	<h2 class="titulo-articulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="thumbnail">
		<?php if(has_post_thumbnail()){
				the_post_thumbnail();
			}
		?>
	</div>
	<?php the_content(); ?>
	</article>

	<?php endwhile; else: ?>

	<p><?php _e('Artículo no encontrado.'); ?></p>

	<?php endif; ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>