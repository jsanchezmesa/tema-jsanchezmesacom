<?php get_header(); ?>

<section class="section-main" id="main">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<article class="articulo">

	<span class="categoria"><?php the_category(); ?></span>
	<h2 class="titulo-articulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

	<?php //muestra entradas relacionadas
	$tags = wp_get_post_tags($post->ID);

	if($tags){
		$tag_ids = array();

		foreach($tags as $individual_tag)
			$tag_ids[] = $individual_tag->term_id;

		$args = array(
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'showposts' => 3, //Número de posts relacionados a mostrar
			'caller_get_posts' => 1
		);

		$my_query = new wp_query($args);

		if($my_query->have_posts()){
			echo '<h3>Artículos relacionados</h3><ul>';
			while($my_query->have_posts()){
				$my_query->the_post();
				?>
				<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink a <?php the_title_attribute(); ?>" ><?php the_title(); ?></a></li>
				<?php
			}
			echo '</ul>';
		}

		wp_reset_query();
	} ?>

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