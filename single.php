<?php get_header(); ?>

	<div id="container">
		<div id="content" class="hfeed">

<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php veryplaintxt_post_class(); ?>">
				<h2 class="entry-title"><a title="permalink" href="<?php get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="dah-entry-subtitle">
					<span class="dah-date"><?php unset($previousday); printf(__('%1$s', 'veryplaintxt'), the_date('D, j M Y, h:i A (e)', false)) ?></span>
					<span class="dah-license-badge" title="license info"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img height="18" alt="Creative Commons License" style="border-width:0" src="https://mirrors.creativecommons.org/presskit/buttons/88x31/png/by-nc-sa.png" /></a></span>
				</div>
				<div class="entry-content">
					<?php the_content('<span class="more-link">'.__('Read More', 'veryplaintxt').'</span>'); ?>
				</div>
			</div><!-- .post -->

		</div><!-- #content .hfeed -->
	</div><!-- #container -->
<?php get_sidebar() ?>
<?php get_footer() ?>
