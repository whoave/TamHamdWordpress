<?php

add_theme_support( 'post-thumbnails' ); 
function print_post_title() {
    global $post;
    $thePostID = $post->ID;
    $post_id = get_post($thePostID);
    $title = $post_id->post_title;
    $perm = get_permalink($post_id);
    $post_keys = array(); $post_val = array();
    $post_keys = get_post_custom_keys($thePostID);
     
    if (!empty($post_keys)) {
    foreach ($post_keys as $pkey) {
    if ($pkey=='external_url') {
    $post_val = get_post_custom_values($pkey);
    }
    }
    if (empty($post_val)) {
    $link = $perm;
    } else {
    $link = $post_val[0];
    }
    } else {
    $link = $perm;
    }
    echo '<h3><a href="'.$link.'" rel="bookmark" title="'.$title.'">'.$title.'</a></h3>';
    }

    if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Reklam',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


if ( function_exists('register_sidebar') )
register_sidebar(array(
  'name' => 'Dostlar',
  'before_widget' => '<div class = "widgetizedArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
)
);


if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Galeri',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);



// adminpanel
function theme_settings_page(){

    ?>
    <div class="wrap">
    <h1>TamHamd Ayarları</h1>
    <form method="post" action="options.php">
        <?php
            settings_fields("section");
            do_settings_sections("theme-options");      
            submit_button(); 
        ?>          
    </form>
    </div>
<?php

}
function display_forum_element()
{
	?>
    	<input type="text" name="forum_url" id="forum_url" value="<?php echo get_option('forum_url'); ?>" />
    <?php
}

function display_skype_element()
{
	?>
    	<input type="text" name="skype_url" id="skype_url" value="<?php echo get_option('skype_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function logo_display()
{
	?>
    	<input type="text" name="logo_display" id="logo_display" value="<?php echo get_option('logo_display'); ?>" />
   <?php
}




function display_theme_panel_fields()
{
    add_settings_section("section", "Beta v1.0", null, "theme-options");
    
    add_settings_field("logo_display", "Logo URL(250x50)", "logo_display", "theme-options", "section");  
    add_settings_field("forum_url", "Forum URL", "display_forum_element", "theme-options", "section");
	add_settings_field("skype_url", "Skype ID", "display_skype_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Url", "display_facebook_element", "theme-options", "section");

    register_setting("section", "forum_url");
    register_setting("section", "skype_url");
    register_setting("section", "facebook_url");
    register_setting("section", "logo_display", "handle_logo_upload");

}

add_action("admin_init", "display_theme_panel_fields");

    function add_theme_menu_item()
    {
        add_menu_page("Theme Panel", "TamHamd Teması", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    }
    
    add_action("admin_menu", "add_theme_menu_item");



// adminpanel

//pageination

//pagination


?>