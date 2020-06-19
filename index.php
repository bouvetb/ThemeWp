<?php
get_header();
?>
<h1>Villes ou nous proposons des biens : </h1>
<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				
				<?php $loop = new WP_Query( array( 'post_type' => 'ville') ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
				      
				<?php endwhile; wp_reset_query(); ?>
			</ul>
		</div>
	</section>

<?php 
get_footer();

?>