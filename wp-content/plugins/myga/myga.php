<?php
/**
*Plugin Name: Adding google analytics token
*Description: Plugin to add google analytics script in the header of the site in convenient way
**/

function add_ga_menu_option()
{
    add_menu_page('Add google analytics script', 'GA script','manage_options','ga-admin-menu','ga_scripts_page','',200);
}

add_action('admin_menu','add_ga_menu_option');

function ga_scripts_page()
{
    if(array_key_exists('submit_scripts_update', $_POST))
    {
        update_option('header_scripts', $_POST['header_scripts']);

        ?>
        <div id="setting-error-settings-updated" class="updated settings-error notice is-dismissible"><strong>Settings have been saved.</strong></div>
        <?php
    }
    
    $header_scripts = get_option('header_scripts',"none");

    ?>
    <div class="wrap">
        <h2>Update Scripts</h2>
        <form action="" method="post">
            <label for="header_scripts">Header Scripts</label>
            <textarea name="header_scripts" class="large-text"><?php echo $header_scripts;?></textarea>
            <input type="submit" name="submit_scripts_update" class="button button-primary" value="Update scripts">
        </form>
    </div>
    <?php
}

function display_header_scripts()
{
    $header_scripts = get_option('header_scripts','none');

    echo $header_scripts;
}

add_action('wp_head', 'display_header_scripts')
?>