		<div class="clearfix">
			<div class="conTitle otoiawase">
				<h2>園長のはなし</h2>
			</div>
			<div id="sideMenu">
				<?php get_sidebar(); ?>
			</div>
			<div class="conBox">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
				<div class="blog-box">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="conBoxText blog">
						<?php the_content(); ?>
						<em>[公開日時]<?php the_date(); ?> <?php the_time(); ?></em>
						[カテゴリー]<?php the_category(); ?>
						<?php the_tags(); ?>
						<?php comments_template(); ?>
					</div>
				</div>
<?php
endwhile;
endif;
?>
			</div>
		</div>
