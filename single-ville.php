<?php
get_header();
global $test;
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
	<h1><?php the_title(); ?></h1>
	<h2><?php the_field("description_de_la_ville");?></h2>
	
	<h2>Voici les logements disponibles a <?php  the_title();?>
	<?php $test = get_the_title(); ?>
	:
	</h2>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				
				<?php $loop = new WP_Query( array( 'post_type' => 'Logement') ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $ville = get_field("ville",get_the_ID());
						if(get_the_title( $ville ) == $test){


					?>
					<li>
					<a href="<?php the_permalink() ?>">
						<img src=" <?php echo get_the_post_thumbnail_url(); ?>" alt="" title="" class="property_img"/>
					</a>
					<div class="property_details">
						<h1>
							<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
						</h1>
					</div>
				</li>
				 <?php }?>     
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
	</section>
<?php 
get_footer();
?>