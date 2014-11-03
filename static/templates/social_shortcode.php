<!-- Social Stream Module -->
<?php

$stream_class = 'social-stream-module';
$template_name = 'wp_social_stream_social_item_list';

if( $data[ 'template' ] ){
  if( in_array( $data[ 'template' ], array( 'home' ) ) ){
    $stream_class .= '-' . $data[ 'template' ];
    $template_name .= '_' . $data[ 'template' ];
  }
}
?>
<div
  id="wp-social-stream-<?php echo rand(); ?>"
  class="wp-social-stream <?php echo $stream_class; ?>"
  <?php // General options ?>
  data-requires="<?php echo $data[ 'requires' ]; ?>"
  data-path="<?php echo $data[ 'path' ] ?>"
  data-callback="<?php echo $data[ 'callback' ] ?>"
  data-wall="<?php echo $data[ 'wall' ] ?>"
  data-rotate_delay="<?php echo $data[ 'rotate_delay' ] ?>"
  data-rotate_direction="<?php echo $data[ 'rotate_direction' ] ?>"
  data-height="<?php echo $data[ 'height' ] ?>"
  data-limit="<?php echo $data[ 'limit' ] ?>"
  data-facebook_limit="<?php echo $data[ 'facebook_limit' ] ?>"
  data-twitter_limit="<?php echo $data[ 'twitter_limit' ] ?>"
  data-instagram_limit="<?php echo $data[ 'instagram_limit' ] ?>"
  data-youtube_limit="<?php echo $data[ 'youtube_limit' ] ?>"
  data-moderate="<?php echo $data[ 'moderate' ] ?>"
  data-remove="<?php echo $data[ 'remove' ] ?>"
  data-filter="<?php echo $data[ 'filter' ] ?>"
  data-controls="false"
  <?php // Twitter options ?>
  data-twitter_search_for="<?php echo $data[ 'twitter_search_for' ] ?>"
  data-twitter_show_text="<?php echo $data[ 'twitter_show_text' ] ?>"
  <?php // Instagram options ?>
  data-instagram_search_for="<?php echo $data[ 'instagram_search_for' ] ?>"
  data-instagram_client_id="<?php echo $data[ 'instagram_client_id' ] ?>"
  data-instagram_access_token="<?php echo $data[ 'instagram_access_token' ] ?>"
  data-instagram_redirect_url="<?php echo $data[ 'instagram_redirect_url' ] ?>"
  <?php // Youtube options ?>
  data-youtube_search_for="<?php echo $data[ 'youtube_search_for' ] ?>"
  <?php // Facebook options ?>
  data-facebook_search_for="<?php echo $data[ 'facebook_search_for' ] ?>"
  data-title="<?php echo $data[ 'title' ] ?>"
  data-description="<?php echo $data[ 'description' ] ?>"
  data-order_function="<?php echo $data[ 'order_function' ] ?>"
  data-bind="template: { name: '<?php echo $template_name; ?>', data: $data }"></div>
</div>
