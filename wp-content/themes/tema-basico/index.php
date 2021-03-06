<?php get_header(); ?>

<div class="conteudo">
	<main>
		<section class="slide container">Slide</section>
		<section class="servicos container">Serviços</section>
		<section class="meio container">
			<div class="row">
				<aside class="barra-lateral col-md-3">Barra Lateral</aside>
				<div class="noticias col-md-9">
					<?php
						if (have_posts()):
							while (have_posts()) : the_post();
					?>
						<h1><?php the_title(); ?></h1>
						<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
						<p>Categorias: <?php the_category(' '); ?></p>
						<p><?php the_tags('Tags: ', ', '); ?></p>
						<p><?php the_content(); ?></p>

					<?php
						endwhile;
						else:
					?>
						<p>Não tem nada ainda pra moststar</p>
					<?php
						endif;
					?>

				</div>
			</div>
			<section class="mapa container">Mapa</section>
		</section>
	</main>
</div>
<?php get_footer(); ?>

