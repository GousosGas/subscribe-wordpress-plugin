<?php
//die - terminates the scripts and output a message
//die('settings page');



//Create menu link

function ffl_options_menu_link(){

    //create menu option on wordpress settings section
   add_options_page('Facebook Footer Link Options',
   'Facebook Footer Link',
   'manage_options',
   'ffl-options',
   'ffl_options_content'
       );
}



//create options page content

function ffl_options_content(){

    //init options global
    global $ffl_options;

    //ob_start — Turn on output buffering
    //exit php
    ob_start(); ?>
    <div class="wrap">
        <!-- _e displays translated text-->
        <h2><?php _e('Facebook Footer Link Settings','ffl_domain')?></h2>
        <p><?php _e('Settings for the facebook footer link plugin ','ffl_domain')?></p>

        <form action="options.php" method="post">

            <?php
            //say that those are fields of a field group
            settings_fields('ffl_settings_group')?>

            <table class="form-table">
                <tbody>
                <tr>
                    <th scope = "row"><label for="ffl_settings[enable]"> <?php _e('Enable','ffl_domain') ?> </label></th>
                   <!--For use in checkbox and radio button form fields. Compares two given values (for example, a saved option vs. one chosen in a form) and, if the values are the same, adds the checked attribute to the current radio button or checkbox-->
                    <td><input name="ffl_settings[enable]" type="checkbox" id="'ffl_settings[enable]" value="1" <?php checked(1,$ffl_options['enable'])?>></td>
                </tr>

                <tr>
                    <th scope = "row"><label for="ffl_settings[facebook_url]"> <?php _e('Facebook Profile URL','ffl_domain') ?> </label></th>

                   <!--For use in checkbox and radio button form fields. Compares two given values (for example, a saved option vs. one chosen in a form) and, if the values are the same, adds the checked attribute to the current radio button or checkbox-->

                    <td><input name="ffl_settings[facebook_url]" type="text" id="ffl_settings[facebook_url]" value = "<?php echo $ffl_options['facebook_url'];?>" class="regular-text" >

                        <?php echo $ffl_options['facebook_url']?>
                    <p class="description"><?php _e('Enter your facebook Profile URL','ffl_domain')?></p>
                    </td>
                </tr>


                <tr>
                    <th scope = "row"><label for="ffl_settings[link_color]"> <?php _e('Link Color','ffl_domain') ?> </label></th>

                   <!--For use in checkbox and radio button form fields. Compares two given values (for example, a saved option vs. one chosen in a form) and, if the values are the same, adds the checked attribute to the current radio button or checkbox-->

                    <td><input name="ffl_settings[link_color]" type="text" id="'ffl_settings[link_color]" value = "<?php echo $ffl_options['link_color'];?>" class="regular-text" >
                    <p class="description"><?php _e('Enter a color or HEX value with # sign ','ffl_domain')?></p>
                    </td>
                </tr>


                <tr>
                    <th scope = "row"><label for="ffl_settings[show_in_feed]"> <?php _e('Show In Posts Feed','ffl_domain') ?> </label></th>

                    <!--For use in checkbox and radio button form fields. Compares two given values (for example, a saved option vs. one chosen in a form) and, if the values are the same, adds the checked attribute to the current radio button or checkbox-->

                    <td><input name="ffl_settings[show_in_feed]" type="checkbox" id="'ffl_settings[show_in_feed]" value="1" <?php checked(1,$ffl_options['show_in_feed'])?>></td>
                </tr>




                </tbody>
            </table>

            <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes','ffl_domain')?>"></p>

        </form>
    </div>

<?php
    //dicard the the stored buffer
    echo ob_get_clean();
}

//add the function to a hook
add_action('admin_menu','ffl_options_menu_link');



//register settings

function ffl_register_settings(){
    register_setting('ffl_settings_group','ffl_settings');
}

add_action('init','ffl_register_settings');