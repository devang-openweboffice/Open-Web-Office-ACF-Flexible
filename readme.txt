=== Open Web Office ACF Flexible Theme ===
Tested up to: 5.4.1
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Default theme for 2020.

== Description ==

Our default theme for ACF Pro Flexible Content layouts is designed to take full advantage of the 
flexibility of the ACF Pro Flexible content fields. Organizations and businesses have the 
ability to create dynamic landing pages with endless layouts using the 
group and column flexible fields. This starter theme contains normal template to create default page,
flexible template to create dynamic layouts.


== Copyright ==

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Instructions ==
1. Install Wordpress 
Installtion of WordPress from WordPress.ordg is pretiy straigh forword.
You can follow the steps mentioned here in local or hosting server.
Please go thorugh the steps here: https://wordpress.org/support/article/how-to-install-wordpress/

2. Installing a WordPress ACF Flexible Starter theme
In WordPress add and active any theme by below two steps:

1. Download and unzip the theme package from my GitHub URL: 
2. Log in to your WordPress Dashboard (i.e.: examplesite.com/wp-admin or localhost/wp-admin)
3. Click on Appearance > Themes
4. On the Themes page, click the Add New button on the top of the page
5. Click the Upload Theme button
6. Choose the [themename].zip from your theme package download from my GitHub URL.
7. Press the Install Now button
8. Back on the Themes page, click on Activate

Or you can pull my theme in Github to the wp-content/themes using GIT commands.

3. ACF Pro plugin required. 
As this starter theme created to take leverege ACF Flexible content field layouts ACF Pro plugin required to activate the theme.
You need to install the ACF Pro plugin then only this starter ACF Flexible theme will activate.
If you do not have plugin then it will show error as shown below image:

4. Basic installation
As theme activate you can finc ACF-json folder in which one basic import setting json file presnt.
You need to import this json file in ACF > Tools > import 
This json will add two filed groups one for theme options as Header & Footer & Custom post type module.
Second field group is ACF Flexible content group where you can register layouts. This field group only assign to the Home flex and page flex template only.

5. Get started from stater theme
Once you all set you just need to create a layout in flexible content field and add same to the page which has page flex templte.
If this layout is new then on page load it will automatically create a layout template in theme > template-parts > sections folder with basic text as "Add HTML here".
On this layout you can add your HTML and ACF sub field dynamic php code so it will show the layout on the page.

6. Benefit of this starter theme
As fix ACF Flexible content layout templates created dynamically so developer or designer jsut need to work on those layout section templates without doing any extra page templates.
All Flexible layouts are become global so admin can set any section in any page so there will benefit to create layouts in quick time.

As this starter theme doesnt have any page builder and once developer start to develop any website then from the start developer have upper hand to develop high performance website.

7. Extra addon : Custom post type 
As we already taking leverage on ACF Pro plugin so, there will be an theme option on which you can register the custom post type and custom taxonomy to create dyanamic post listing and detail post other then defaul post type.

In theme option you just need to pass custom post type name and select below options as show below image.
We have given option if you deselect the option then no additional code will load on theme.



== Dependencies ==
- ACF pro WordPress plugin
- WP folder should have full rights to create automatic layouts php file in theme > template-parts > sections folder. 
