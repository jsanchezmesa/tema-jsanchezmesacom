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
	<?php the_content('Leer más'); ?>
	</article>


	<?php endwhile; else: ?>

	<p><?php _e('No hay entradas que mostrar'); ?></p>

	<?php endif; ?>

	<?php //paginación

	// obtenemos el total de páginas
	global $wp_query;
	$total = $wp_query->max_num_pages;

	// solo seguimos con el resto si tenemos más de una página
	if ( $total > 1 )  {
    	// obtenemos la página actual
     	if ( !$current_page = get_query_var('paged') )
        	$current_page = 1;

     	// la estructura de “format” depende de si usamos enlaces permanentes "humanos"
     	$format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
     	echo paginate_links(array(
        	'base' => get_pagenum_link(1) . '%_%',
    	    'format' => $format,
	        'current' => $current_page,
    	    'prev_next' => True,
        	'prev_text' => __('&laquo; Anterior'),
        	'next_text' => __('Siguiente &raquo;'),
        	'total' => $total,
        	'mid_size' => 4,
        	'type' => 'list'
     	) );
	}
	?>

</section><!-- fin section-main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>