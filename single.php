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

<p class="dah-license-callout" xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/">
&copy; 
	<time datetime="<?php printf(__('%1$s', 'veryplaintxt'), the_date('D, j M Y, h:i A (e)', false)) ?>"><?php echo date('Y'); ?></time>
	<a property="dct:title" 
		rel="cc:attributionURL" 
		href="<?php echo site_url('','https'); ?>"><?php bloginfo('name') ?></a> 
	by 
	<span property="cc:attributionName">David Hasan</span> 
	is licensed under a 
	<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
		Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License
	</a>
</p> 


<?php get_sidebar() ?>
<?php get_footer() ?>
