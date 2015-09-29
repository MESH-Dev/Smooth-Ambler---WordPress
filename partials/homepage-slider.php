<div class="subheader">
	<ul class="homeslides">

		<?php
		while(has_sub_field('homepage_banner'))
		{?>
			<li>
				<?php

		          $imageArray = get_sub_field('homepage_banner_image');
		          $imageAlt = $imageArray['alt'];
		          $imageURL = $imageArray['sizes']['home-banner'];
		        ?>
		        <img src="<?php echo $imageURL;?>" alt="<?php echo $imageAlt; ?>">

				<div class="container">
					<div class="row home_quote">
						<div class="eight columns offset-by-two home-title">
								<h2><?php the_sub_field('homepage_callout_text'); ?></h2>
						</div>
						<div class="twelve columns arrow"><img src="<?php bloginfo('template_url' );?>/assets/img/SA_headerarrow.png" alt="" title=""></div>
					</div>
				</div>

			</li>

		<?
		}
		?>



	</ul>

	<div class="clear"></div>
</div>
