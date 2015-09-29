<?php get_header(); ?>

	<?php
	$makers_page = 73;
	if( get_field('banner_image',$makers_page) ): ?>
		<div class="rslides page-banner">
			<?php
			$banner = true;
			$imageArray = get_field('banner_image',$makers_page);
			$imageAlt = $imageArray['alt'];
			$imageThumbURL = $imageArray['sizes']['page-banner'];
			?>
			<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
			<div class="container">
			<div class="banner-title">
				<h1><?php echo get_the_title($makers_page); ?></h1>
			</div>
			<div class="banner-arrow"><img src="<?php bloginfo('template_url' );?>/assets/img/SA_headerarrow.png" alt="" title=""></div>
			</div>
		</div>
	<?php endif; ?>

	<div class="container page-content">

		<div class="two columns">

			<?php get_template_part( 'partials/sidebarNav' ); ?>

		</div>

		<div class="nine columns">

			<div class="row">
				<div class="eight columns">
					<h2 class="headline"><?php wp_title(''); ?></h2>
				</div>
			</div>

			<?php if(have_posts()){while(have_posts()){the_post(); ?>

				<div class="row">

					<div class="three columns">
						<?php if( get_field('post_image') ): ?>
						<div class="post-image">
							<?php
								$imageArray = get_field('post_image');
								$imageAlt = $imageArray['alt'];
								$imageThumbURL = $imageArray['sizes']['four-col-square'];
							?>
							<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
						</div>
						<?php endif; ?>
					</div>

					<div class="five columns">

							<h2 class="blog-title"><a href="<?php echo get_permalink( get_the_ID() ) ?>"><?php the_title(); ?></a></h2>

							<span class="author"><?php the_author_posts_link() ?></span> &nbsp;<span class="date"><?php the_time('m-d-Y') ?></span>

							<p><?php the_excerpt(); ?></p>

							<h4 class="comments"><a href="<?php comments_link(); ?>">Comments (<?php echo get_comments_number(get_the_ID()) ?>)</a></h4>
							<!-- <span class="categories"><?php echo the_category(', ') ?></span> <span class="tags"><?php the_tags(' ') ?></span> -->

							<br class="clear" />

					</div>

				</div>

				<div class="eight columns table-border"></div><br/>

			<?php } } ?>

			<div class="eight columns">

				<?php
				global $wp_query;

				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
				?>
			</div>

		</div>

	</div>

<?php get_footer(); ?>
