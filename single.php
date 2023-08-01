<?php get_header(); ?>

	<div id="container">
		<div id="content" class="hfeed">

<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php veryplaintxt_post_class(); ?>">
				<h2 class="entry-title"><a href="<?php get_permalink(); ?>" rel="bookmark" style="text-decoration:underline"><?php the_title(); ?></a></h2>
				<div class="dah-entry-subtitle">
					<span style="float:left"><?php unset($previousday); printf(__('%1$s', 'veryplaintxt'), the_date('D, j M Y, h:i A (e)', false)) ?></span>
					<span title="license info" style="float:right"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a></span>
				</div>
				<div class="entry-content">
					<?php the_content('<span class="more-link">'.__('Read More', 'veryplaintxt').'</span>'); ?>
				</div>
			</div><!-- .post -->

		</div><!-- #content .hfeed -->
	</div><!-- #container -->
<?php get_sidebar() ?>
<?php get_footer() ?>
