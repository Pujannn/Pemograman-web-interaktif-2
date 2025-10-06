<?php
/** 
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package irvine news
 */

$irvine_news_footer_widgets_enabled = get_theme_mod('newsexo_footer_widgets_enabled', true);  
$irvine_news_footer_style = get_theme_mod('newsexo_footer_style', 'dark');
$irvine_news_footer_container_size = get_theme_mod('newsexo_footer_container_size', 'container-full');
$irvine_news_footer_copright_enabled = get_theme_mod('newsexo_footer_copright_enabled', true);
$irvine_news_footer_copright_text = get_theme_mod('newsexo_footer_copright_text', '' . __('Copyright', 'irvine-news') . ' &copy; 2025 | ' . __('Powered by', 'irvine-news') . ' <a href="//wordpress.org/">WordPress</a>');
$irvine_news_scroll_to_top_enabled = get_theme_mod('newsexo_scroll_to_top_enabled', true);


$irvine_news_you_have_missed_display_all_pages_disabled = get_theme_mod('newsexo_you_have_missed_display_all_pages_disabled', true);
if($irvine_news_you_have_missed_display_all_pages_disabled == true){
		get_template_part( 'template-parts/index', 'you-may-have-missed' );
}else {
	if( is_page_template('page-templates/frontpage.php') ){
		get_template_part( 'template-parts/index', 'you-may-have-missed' );
	}
}

?>
	<!--Footer-->
	<footer class="site-footer site-footer-overlay">
		<div class="<?php echo $irvine_news_footer_container_size; ?>">
		
		<?php if($irvine_news_footer_widgets_enabled == true): ?>
				<!--Footer Widgets-->			
				<div class="row footer-sidebar wow animate zoomIn" data-wow-delay="0.3s">
				   <?php get_template_part('sidebar','footer');?>
				</div>
			<!--/Footer Widgets-->
		<?php endif; ?>
	
		<?php if($irvine_news_footer_copright_enabled == true): ?>
			<div class="row">
				<div class="col-12">
					<div class="site-info-border"></div>
				</div>
						
				<div class="col-md-6 col-sm-12">
					<div class="site-info text-left">
					    <p>
                            <?php echo wp_kses_post($irvine_news_footer_copright_text);?>
                              <span class="sep"> | </span>
                             <?php  printf(esc_html__('%1$s by %2$s', 'irvine-news'), '<a href="https://themearile.com/irvine-news-theme/" target="_blank">Irvine News</a>', '<a href="https://themearile.com" target="_blank">ThemeArile</a>');	?>
                              </a>
                        </p>				
					</div>
				</div>	
				<div class="col-md-6 col-sm-12">
						<?php	wp_nav_menu( array(
									 'theme_location'  => 'footer',
									 'menu_class'      => 'site-info-menu',
									 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
									 'walker'          => new wp_bootstrap_navwalker()
								) ); ?>			
				</div>
			</div>
		<?php endif; ?>	
	
		</div>
	
			
	</footer>
	<!--/End of Footer-->		
	<?php if($irvine_news_scroll_to_top_enabled == true): ?>
		<!--Page Scroll Up-->
		<div class="page-scroll-up"><a href="#totop"><i class="fa fa-angle-up"></i></a></div>
		<!--/Page Scroll Up-->
    <?php endif; ?>
	
<?php wp_footer(); ?>

</body>
</html>