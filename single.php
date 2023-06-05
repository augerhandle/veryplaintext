<?php get_header(); ?>

	<div id="container">
		<div id="content" class="hfeed">

<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php veryplaintxt_post_class(); ?>">
				<h2 class="entry-title"><a href="<?php get_permalink(); ?>" rel="bookmark" style="text-decoration:underline"><?php the_title(); ?></a></h2>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'veryplaintxt'), the_date('D, j M Y, h:i A (e)', false)) ?></abbr></div>
				<div class="entry-content">
					<?php the_content('<span class="more-link">'.__('Read More', 'veryplaintxt').'</span>'); ?>
				</div>
			</div><!-- .post -->

		</div><!-- #content .hfeed -->
	</div><!-- #container -->
<?php get_sidebar() ?>
<?php get_footer() ?>