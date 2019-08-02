<?php
//about theme info
add_action( 'admin_menu', 'skt_stone_lite_abouttheme' );
function skt_stone_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-stone-lite'), esc_html__('About Theme', 'skt-stone-lite'), 'edit_theme_options', 'skt_stone_lite_guide', 'skt_stone_lite_mostrar_guide');   
} 

//guidline for about theme
function skt_stone_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'skt-stone-lite'); ?>
		   </div>
          <p><?php esc_attr_e('SKT Stone lite is a Simple WordPress theme available for free and is suitable for any type of business or personal website. It is a responsive and mobile friendly template and is compatible with page builder plugins like Elementor, Divi, Visual Composer, Live composer etc and WooCommerce and hence can be used to have a website without any problems. Can be used by people who are novice and are looking for simple template and simple website. Images, text and color scheme can be changed and is also compatible with multilingual plugins like WPML, qTranslate X and Polylang among others. SEO friendly as well.','skt-stone-lite'); ?></p>
		  <a href="<?php echo esc_url(skt_stone_lite_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_STONE_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_attr_e('Live Demo', 'skt-stone-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_STONE_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_attr_e('Buy Pro', 'skt-stone-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_STONE_LITE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_attr_e('Documentation', 'skt-stone-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_STONE_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>