<?php
// Template Name: Portifolio
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php include(TEMPLATEPATH . "/inc/introducao.php");?>

		<section class="container animar-interno">
			<ul class="rslides">
				<?php
	        $quotes = get_field('citacoes_portfolio');
	        if(isset($quotes)){ foreach($quotes as $quote) {
	      ?>
				<li>
					<blockquote class="quote_clientes">
						<p><?php echo $quote['quote'] ?></p>
						<cite><?php echo $quote['nome_quote'] ?></cite>
					</blockquote>
				</li>
				<?php } } ?>
			</ul>
		</section>
		<section class="portfolio">
		  <div class="container">
		<?php include(TEMPLATEPATH . "/inc/clientes-portifolio.php");?>
			</div>
		</section>

<?php endwhile; else: endif; ?>
		<?php get_header(); ?>
