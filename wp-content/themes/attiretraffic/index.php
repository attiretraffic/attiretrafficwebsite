<?php
/* Template Name: Home Page */
get_header(); ?>

<div class="container">
	<section class="trending-tshirts">
		<h2 class="heading mt-10 mb-10">Trending T-shirts</h2>
		<ul class="posts-list row">
		<?php
		$args = [
		        "type" => "post",
		        "posts_per_page" => -1,
		        "tags" => "attire"
		    ];
		    $popularPosts = new WP_Query($args);
		    if($popularPosts->have_posts()):
		        while($popularPosts->have_posts()): $popularPosts->the_post(); ?>
				<li class='post col-md-3 col-sm-6 mob-vert-posts mb-20'>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="hr-posts hover tran disp-b clearfix">
						<div class="image-wrapper mb-10">
					        <img data-src="<?php bloginfo('template_url') ?>/images/loader-97x64.gif" src="<?php the_post_thumbnail_url(); ?>" class="img-responsive tran">
						</div>
						<div class="content-wrapper text-center">
							<?php $cats = get_the_category($post->ID); ?>
							<h3 class="title"><?php the_title(); ?></h3>
							<p class="category-name highlight"><?php echo $cats[0]->name; ?></p>
							<p class="content"><?php the_content(); ?></p>
						</div>
					</a>
				</li>
		        <?php endwhile;
		    endif;
		    wp_reset_postdata();
		 ?>
		</ul>
	</section>
</div>
<?php get_footer();
