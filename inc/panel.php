<?php
// Settings Theme
add_action('admin_menu', 'devlogor_menu');
function devlogor_menu() {
  add_menu_page('D-Config', 'D-Config', 'administrator','configuration', 'configuration','dashicons-admin-generic',999 );
  add_submenu_page( 'configuration', 'Dashboard', 'Dashboard', 'administrator', 'configuration','configuration');
  $submenu['configuration'][0][0] = 'Dashboard';
  add_action( 'admin_init', 'register_devlogor_settings' );
}
function register_devlogor_settings() {
  register_setting( 'devlogor-settings', 'set_theme_mode' );
  register_setting( 'devlogor-settings', 'set_profile' );
  register_setting( 'devlogor-settings', 'set_profile_imageurl' );
  register_setting( 'devlogor-settings', 'set_profile_text' );
  register_setting( 'devlogor-settings', 'set_footer_heading' );
  register_setting( 'devlogor-settings', 'set_footer_text' );
  register_setting( 'devlogor-settings', 'set_url_instagram' );
  register_setting( 'devlogor-settings', 'set_url_facebook' );
  register_setting( 'devlogor-settings', 'set_url_youtube' );
  register_setting( 'devlogor-settings', 'set_url_twitter' );
  register_setting( 'devlogor-settings', 'set_url_linkedin' );
}
function dashboard() {
?>
<div class="wrap">
<h2>Dashboard</h2>
</div>
<?php }
function configuration() {
?>
<div class="wrap">
<h2>Theme Settings</h2>
<form method="post" action="options.php" enctype="multipart/form-data">
    <?php settings_fields( 'devlogor-settings' ); ?>
    <?php do_settings_sections( 'devlogor-settings' ); ?>
    <div class="main-config">
      <table class="form-table">
        <tr valign="top" class="btom">
          <th scope="row">Theme mode</th>
          <td>
            <select name="set_theme_mode">
              <option value="light" <?php if(get_option('set_theme_mode')=='light') echo 'selected="selected"'; ?>>Light</option>
              <option value="dark" <?php if(get_option('set_theme_mode')=='dark') echo 'selected="selected"'; ?>>Dark</option>
            </select>
          </td>
        </tr>

        <tr valign="top">
          <th scope="row">Short Profile</th>
          <td>
            <select name="set_profile">
              <option value="no" <?php if(get_option('set_profile')=='no') echo 'selected="selected"'; ?>>None</option>
              <option value="yes" <?php if(get_option('set_profile')=='yes') echo 'selected="selected"'; ?>>Displaying</option>
            </select>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">Avatar [image]</th>
          <td><input type="text" name="set_profile_imageurl" value="<?php echo get_option('set_profile_imageurl'); ?>" placeholder="Url Image"></td>
        </tr>
        <tr valign="top" class="btom">
          <th scope="row">Text</th>
          <td><textarea name="set_profile_text" rows="3" value="<?php echo esc_html( get_option('set_profile_text') ); ?>" class="large-text code" placeholder="short text about you"><?php echo esc_html( get_option('set_profile_text') ); ?></textarea></td>
        </tr>

        <tr valign="top">
          <th scope="row">[Footer] Heading</th>
          <td><input type="text" name="set_footer_heading" value="<?php echo get_option('set_footer_heading'); ?>" placeholder="Title"></td>
        </tr>
        <tr valign="top" class="btom">
          <th scope="row">[Footer] Text</th>
          <td><textarea name="set_footer_text" rows="3" value="<?php echo esc_html( get_option('set_footer_text') ); ?>" class="large-text code" placeholder="text description in footer"><?php echo esc_html( get_option('set_footer_text') ); ?></textarea></td>
        </tr>
        
        <tr valign="top">
          <th scope="row">Social Media</th>
          <td class="sosmed">
            <div class="sm">
              <div>Instagram</div>
              <input type="text" name="set_url_instagram" value="<?php echo get_option('set_url_instagram'); ?>" placeholder="Url Instagram">
            </div>
            <div class="sm">
              <div>Facebook</div>
              <input type="text" name="set_url_facebook" value="<?php echo get_option('set_url_facebook'); ?>" placeholder="Url Facebook">
            </div>
            <div class="sm">
              <div>Youtube</div>
              <input type="text" name="set_url_youtube" value="<?php echo get_option('set_url_youtube'); ?>" placeholder="Url Youtube">
            </div>
            <div class="sm">
              <div>Twitter</div>
              <input type="text" name="set_url_twitter" value="<?php echo get_option('set_url_twitter'); ?>" placeholder="Url Twitter">
            </div>
            <div class="sm">
              <div>LinkedIn</div>
              <input type="text" name="set_url_linkedin" value="<?php echo get_option('set_url_linkedin'); ?>" placeholder="Url LinkedIn">
            </div>
          </td>
        </tr>
      </table>
    </div><!-- Setting -->
    <?php submit_button(); ?>
</form>

<style>
.main-config{background:#FFF;padding:0 25px 5px;margin-top:10px;border:1px solid #ddd}
.btom{border-bottom:1px solid #ddd}
.sm > div {font-weight:500;color:#222;margin-bottom:5px;}
@media (min-width: 640px) {
  .sosmed {
    display:grid;
    gap:2%;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    margin-top:.75rem;
  }
  .sm {
    margin-bottom:1rem;
  }
  .sm input {
    width:100%;
  }
}
</style>
</div>
<?php }