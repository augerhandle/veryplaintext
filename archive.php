<?php get_header() ?>

	<div id="container">
		<div id="content" class="hfeed">

<?php the_post() ?>

<?php if ( is_day() ) : ?>
			<h2 class="page-title"><?php printf(__('Daily Archives: <span>%s</span>', 'veryplaintxt'), get_the_time(__('F jS, Y', 'veryplaintxt'))) ?></h2>
<?php elseif ( is_month() ) : ?>
			<h2 class="page-title"><?php printf(__('Monthly Archives: <span>%s</span>', 'veryplaintxt'), get_the_time(__('F Y', 'veryplaintxt'))) ?></h2>
<?php elseif ( is_year() ) : ?>
			<h2 class="page-title"><?php printf(__('Yearly Archives: <span>%s</span>', 'veryplaintxt'), get_the_time(__('Y', 'veryplaintxt'))) ?></h2>
<?php elseif ( is_author() ) : ?>
			<h2 class="page-title"><?php printf(__('Author Archives: <span class="vcard"><span class="fn n">%s</span></span>', 'veryplaintxt'), get_the_author() ) ?></h2>
			<div class="archive-meta"><?php if ( !(''== $authordata->user_description) ) : echo apply_filters('archive_meta', $authordata->user_description); endif; ?></div>
<?php elseif ( is_category() ) : ?>
			<h2 class="page-title"><?php _e('Category Archives:', 'veryplaintxt') ?> <span class="page-cat"><?php echo single_cat_title(); ?></span></h2>
			<div class="archive-meta"><?php if ( !(''== category_description()) ) : echo apply_filters('archive_meta', category_description()); endif; ?></div>
<?php elseif ( is_tag() ) : ?>
			<h2 class="page-title"><?php _e('Tag Archives:', 'veryplaintxt') ?> <span class="tag-cat"><?php single_tag_title(); ?></span></h2>
<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
			<h2 class="page-title"><?php _e('Blog Archives', 'veryplaintxt') ?></h2>
<?php endif; ?>

<?php rewind_posts() ?>

<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID() ?>" class="<?php veryplaintxt_post_class() ?>">
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'veryplaintxt'), _wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h3>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'veryplaintxt'), the_date('D, j M Y, h:i A (e)', false)) ?></abbr></div>
				<div class="entry-content">
<?php the_excerpt('<span class="more-link">'.__('Continue reading &rsaquo;', 'veryplaintxt').'</span>') ?>

				</div>
			</div><!-- .post -->

<?php endwhile ?>


		</div><!-- #content .hfeed -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>