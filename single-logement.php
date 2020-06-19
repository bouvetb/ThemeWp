<?php
get_header();
?>
<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->

					<h1><?php the_title(); ?></h1>
					<?php the_post_thumbnail();?>
					<h2> Type de bien : <?php the_field("type")?></h2>
					<h2> Surface : <?php the_field("surface")?>m²</h2>
					<h2> Prix : <?php the_field("prix")?>€</h2>
					<h2> Date de mise en vente : <?php the_field("date_de_mise_en_vente")?></h2>
					<h2> Exposition : <?php the_field("exposition")?></h2>	
					<h2>Paticularités :</h2>
				<?php 
				$terms =wp_get_post_terms( get_the_ID(),"Particularites", array( 'fields' => 'all' ));
				foreach ($terms as $test) {?>
					<h2> - <?php echo $test->name ?></h2>
				<?php } ?>


				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</ul>
		</div>
</section>
<?php 
get_footer();
?>