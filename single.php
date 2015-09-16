<?php get_header(); ?>

<section class="section-main" id="main">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<article class="articulo">

	<span class="categoria"><?php the_category(); ?></span>
	<h1 class="titulo-articulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<small class="fecha-articulo">Publicado el <?php the_time('j/m/Y'); ?> por <?php the_author(); ?> -
	<?php comments_popup_link("0 comentarios", "1 comentario", "% comentarios", "numero-comentarios", "Comentarios apagados"); ?></small>
	<div class="thumbnail">
		<?php if(has_post_thumbnail()){
				the_post_thumbnail();
			}
		?>
	</div>
	<?php the_content(); ?>
	</article>

	<div class="etiquetas">
		<?php the_tags(); ?>
	</div>

	<div class="comentarios">
		<?php comments_template(); ?>
	</div>

	<?php endwhile; else: ?>

	<p><?php _e('Artículo no encontrado.'); ?></p>

	<?php endif; ?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>