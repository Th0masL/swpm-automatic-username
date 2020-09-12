<h3><?php _e("Automatic Username Addon Settings",SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME); ?></h3>
<p><?php _e("Read the",SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME); ?> <a href="https://github.com/Th0masL/swpm-automatic-username/" target="_blank"><?php _e("usage documentation",SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME); ?></a> <?php _e("to learn how to use the Automatic Username addon.",SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME); ?></p>
<table class="form-table">
    <tbody>
        <tr>
            <th scope="row"><?php _e("Use Automatic Username",SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME); ?></th>
            <td><input type="checkbox" <?php echo $swpm_automatic_username_enable; ?> name="swpm-addon-automatic-username-enable" value="checked='checked'"/>
                <p class="description"><?php _e("Enabling this option will automatically generate and hide the Username field on the SWPM forms.",SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME); ?></p>
            </td>
        </tr>
    </tbody>
</table>
