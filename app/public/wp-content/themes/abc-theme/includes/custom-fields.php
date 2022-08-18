<?php
function post_metabox_callback($post)
{
  wp_nonce_field('post_intro_text_nonce', 'post_intro_text_nonce'); ?>

  <?php
  $intro_text = get_post_meta($post->ID, 'intro_text', true);
  ?>
  <div>
    <label for="intro_text"><?php _e('Intro text', 'cde-theme'); ?></label><br />

    <textarea style="width:100%;" type="text" name="intro_text" id="intro_text" class="regular-text"><?php echo esc_attr($intro_text); ?></textarea>

  </div>
<?php
}
function post_intro_text_save($post_id)
{

  if (!isset($_POST['post_intro_text_nonce']) || !wp_verify_nonce($_POST['post_intro_text_nonce'], 'post_intro_text_nonce')) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post_id;
  }

  if (!isset($_POST['intro_text'])) {
    return;
  }

  update_post_meta($post_id, 'intro_text', $_POST['intro_text']);
}
function cde_post_custom_meta_box()
{
  add_meta_box('post-custom-field', __('Intro text', 'cde-theme'), 'post_metabox_callback', 'page');
}
add_action('add_meta_boxes', 'cde_post_custom_meta_box');
add_action('save_post', 'post_intro_text_save');

// field 2

function post_metabox_callback_2($post)
{
  wp_nonce_field('post_intro_text_nonce_2', 'post_intro_text_nonce_2'); ?>

  <?php
  $intro_text_2 = get_post_meta($post->ID, 'intro_text_2', true);
  ?>
  <div>
    <label for="intro_text_2"><?php _e('Intro text 2', 'cde-theme'); ?></label><br />
    <textarea style="width:100%;" type="text" name="intro_text_2" id="intro_text_2" class="regular-text"><?php echo esc_attr($intro_text_2); ?></textarea>

  </div>
<?php
}

function post_intro_text_save_2($post_id)
{

  if (!isset($_POST['post_intro_text_nonce_2']) || !wp_verify_nonce($_POST['post_intro_text_nonce_2'], 'post_intro_text_nonce_2')) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post_id;
  }

  if (!isset($_POST['intro_text_2'])) {
    return;
  }

  update_post_meta($post_id, 'intro_text_2', $_POST['intro_text_2']);
}
function cde_post_custom_meta_box_2()
{
  add_meta_box('post-custom-field-2', __('Intro text2', 'cde-theme'), 'post_metabox_callback_2', 'page');
}
add_action('add_meta_boxes', 'cde_post_custom_meta_box_2');
add_action('save_post', 'post_intro_text_save_2');
