<?php get_header() ?>

	<div id="container">
		<div id="content" class="hfeed">

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php veryplaintxt_post_class() ?>">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'veryplaintxt'), _wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'veryplaintxt'), the_date('l, j F Y, h:i A', false)) ?></abbr></div>
				<div class="entry-content">
<?php the_content('<span class="more-link">'.__('(Continued)', 'veryplaintxt').'</span>'); ?>

<?php link_pages('<div class="page-link">'.__('Pages: ', 'veryplaintxt'), "</div>\n", 'number'); ?>
				</div>
			</div><!-- .post -->

<?php endwhile ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('&lt;OLDER', 'veryplaintxt')) ?></div><div><a href="<?php bloginfo('home'); ?>/" title="<?php echo _wp_specialchars(get_bloginfo('name'), 1) ?>" rel="home"><?php _e('HOME', 'veryplaintxt') ?></a></div>
				<div class="nav-next"><?php previous_posts_link(__('NEWER&gt;', 'veryplaintxt')) ?></div>
			</div>

		</div><!-- #content .hfeed -->
	</div><!-- #container -->


<?php get_sidebar() ?>
<?php get_footer() ?>