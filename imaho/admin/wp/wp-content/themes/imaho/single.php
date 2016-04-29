<?php get_header(); ?>
 
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
		<div class="clearfix">
			<div class="conTitle otoiawase">
				<h2>園長のはなし</h2>
			</div>
			<div id="sideMenu">
				<?php get_sidebar(); ?>
			</div>
			<div class="conBox">
				<div class="blog-box">
					<h3><?php the_title(); ?></a></h2>
					<div class="conBoxText blog">
						<?php previous_post_link(); ?> | <a href="/imaho/blog/" target="_self">TOP</a> | <?php next_post_link(); ?>
						<?php the_content(); ?>
						<?php previous_post_link(); ?> | <a href="/imaho/blog/" target="_self">TOP</a> | <?php next_post_link(); ?><br>
						<br>
						<em>[公開日時]<?php the_date(); ?> <?php the_time(); ?></em>
						[カテゴリー]<?php the_category(); ?>
						<?php the_tags(); ?>
						<?php comments_template(); ?>
					</div>
				</div>
			</div>
		</div>

<?php
endwhile;
endif;
?>

<?php get_footer(); ?>