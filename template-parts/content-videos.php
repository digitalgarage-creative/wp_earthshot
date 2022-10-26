<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package earthshot_catalog
 */

?>
  <!-- vid 1 --->
  <div>
    <div class="video__box pb-0">
        <div class="video__box">
         
			<?php 
			$image = get_field('video_thumbnail');
			if( !empty( $image ) ): ?>
				<img class="img-fluid video__box__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
            <a class="js-modal-video " data-video-id="<?php the_field('video_id'); ?>">
            
                <div class="video__box__text">
					
                    <img class="icon_play icon_play-sm" src="/wp-content/themes/earthshot-catalog/images/icon_play.svg" alt="">
                </div>
            </a>
        </div>
            <p class="video__box__title"><?php the_field('video_title'); ?></p>
    </div> 
</div>
