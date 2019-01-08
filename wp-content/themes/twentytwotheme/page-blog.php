<?php get_header(); ?>

<div class="container">
	<div class="row">
  	<?php
  		$arg = array(
  			'post_type'		 => 'post',
  			'posts_per_page' => -1
  		);
  		$get_arg = new WP_Query( $arg );
  		while ( $get_arg->have_posts() ) {
  			$get_arg->the_post();
  		?>
  			<div class="col-md-3 mt-5">
  				<h4><?php the_title() ?></h4>
  				<p><?php the_excerpt() ?></p>
  				<a class="btn btn-primary" href="<?php get_permalink() ?>">Léeme completo</a>
          <h5><?php the_category() ?></h5>
          <h6><?php the_tags() ?></h6>
          
  			</div>
  		<?php } wp_reset_postdata();
  	?>
	</div>
</div>

<?php get_footer(); ?>
