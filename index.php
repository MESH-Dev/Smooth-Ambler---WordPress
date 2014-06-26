<?php get_header(); ?>

	<div class="container page_content">

		<div class="two columns">

			<ul>
				<li><h4>Blog Menu</h4></li>
				<li><h4>Archives</h4></li>
				<li><h4>Search</h4></li>

				<!-- Need to come bck and fix this -->
			</ul>

		</div>

		<div class="nine columns">

			<?php if(have_posts()){while(have_posts()){the_post(); ?>

				<div class="row">

					<div class="three columns">
						<?php if( get_field('post_image') ): ?>
						<div class="post-image">
							<?php
								$imageArray = get_field('post_image');
								$imageAlt = $imageArray['alt'];
								$imageThumbURL = $imageArray['sizes']['page-banner'];
							?>
							<img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
						</div>
						<?php endif; ?>
					</div>

					<div class="five columns">

							<h2><?php the_title(); ?></h2>

							<!-- Need to come back and make these sit next to each other -->

							<h3><?php the_author(); ?></h3>
							<h4><?php the_date() ?></h4>

							<p><?php the_excerpt(); ?></p>

							<h4>Comments (<?php echo get_comments_number(get_the_ID()) ?>)</h4>

							<!-- Need to add the categories here -->

							<br class="clear" />
					</div>

				</div>

			<?php } } ?>

		</div>

	</div>

<?php get_footer(); ?>
