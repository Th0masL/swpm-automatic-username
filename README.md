# Automatic Username addon for SWPM (Simple WordPress Membership)

This is repository contains a WordPress plugin/addon that you can install to be able to automatically generate the Usernames, when using [Simple WordPress Membership plugin](https://simple-membership-plugin.com/).

## General Information

This Add-on for Simple WordPress Membership will automatically generate an Username, and hide the Username fields on the Registration, Login and Profile Edit forms.
The automatic username is generated upon user registration, and is based on the date/time, following with a random 4-digit number : YYMMDDHHmmXXXX.

Example for an user creating an account on July 25th 2020 at 8:55 AM : 20072508551234

## What is it for

- For people that are using Simple WordPress Membership plugin and that don't want the users to have to use an Username, and only want to use Email Addresses upon Login.

## Requirements

- A working [WordPress website](https://www.wordpress.com)
- Basic understanding about how to install and configure WordPress plugins
- The official [Simple WordPress Membership plugin](https://simple-membership-plugin.com/)

## Installation

1) First, make sure that you have installed and configured [Simple WordPress Membership plugin](https://simple-membership-plugin.com/)

2) Download this addon, either by cloning this Github repository, or by downloading the latest ZIP file from the [Release Page](https://github.com/Th0masL/swpm-automatic-username/releases)

3) Uncompress the ZIP file, and rename the folder to make sure it is named `swpm-automatic-username`. The files should be directly located in the folder called `swpm-automatic-username`.

4) Move the folder `swpm-automatic-username` into the WordPress plugin folder, in `wp-content/plugins`

    ```
    # Expected folder structure :
    \wp-content
          \plugins
                \example-of-plugin-1
                \example-of-plugin-2
                \swpm-automatic-username
                      \swpm-automatic-username.php
                \example-of-plugin-3
    ```

5) Go to the Plugins page of your WordPress website, and enable this plugin **SWPM Automatic Username**

6) Then go to the **WP Membership** settings, and go to the page **Addons Settings**

7) Find the **SWPM Automatic Username** section, configure the option **Use Automatic Username**, and save the changes

    ![01-swpm-automatic-username-settings.png](https://github.com/Th0masL/swpm-automatic-username/blob/master/images/01-swpm-automatic-username-settings.png)

8) Verify that the **Username** field is hidden on the **SWPM Registration** page, the **SWPM Login** page and the **SWPM Profil Edit** page

    _Default settings (Username visible)_ :

    ![02-form-default.png](https://github.com/Th0masL/swpm-automatic-username/blob/master/images/02-form-default.png)

    
    _With this Add-on (Username hidden)_ :

    ![03-form-plugin-enabled.png](https://github.com/Th0masL/swpm-automatic-username/blob/master/images/03-form-plugin-enabled.png)

## Troubleshooting / Problems

You will find below some basic help about the most commons problems.

#### Problem 1 : I don't see the SWPM Automatic Username addon in the WordPress Plugin page
  - Verify that you have uncompressed the ZIP file and named the folder correctly : `swpm-automatic-username`
  - Verify that it is in the path `/wp-content/plugins/swpm-automatic-username`
  - Verify that there isn't another sub-folder called `swpm-automatic-username` inside `/wp-content/plugins/swpm-automatic-username` (exemple: `/wp-content/plugins/swpm-automatic-username/swpm-automatic-username`)

#### Problem 2 : The Username field is still visible on the Simple WordPress Membership form pages
  - Verify that you are indeed using [Simple WordPress Membership plugin](https://simple-membership-plugin.com/) and not another Membership plugin
  - Verify that the SWPM plugin is up to date
  - Verify that the **SWPM Automatic Username Addon** is globally enabled on the **WordPress Plugins page**
  - Verify that the **Use Automatic Username** checkbox is enabled in the page **Simple WordPress Membership** > **Settings** > **Addons Settings**

## Thanks

  - The people at [Simple WordPress Membership](https://simple-membership-plugin.com/), for having created such a nice Membership plugin

## Contribution / Bugs / Improvements

Please report any bug, and feel free to fork the project to add some improvements. Pull Requests are welcome :)

## Authors

* **Thomas L.** - *Original version* - [Th0masL](https://github.com/Th0masL)
