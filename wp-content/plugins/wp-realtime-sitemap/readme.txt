=== WP Realtime Sitemap ===
Contributors: Rincewind
Donate link: http://www.daniel-tweedy.co.uk/redir/wordpress-plugins-donation/
Tags: seo, navigation, site, map, sitemap, sitemaps, posts, pages, custom, post, types, wpmu, wordpress, multisite, multiuser, bilingual, i18n, l10n, language, multilanguage, multilingual, translation, qtranslate
Requires at least: 3.0
Tested up to: 3.1
Stable tag: trunk

A sitemap plugin to make it easier for your site to show all your pages, posts, archives, categories and tags in an easy to read format.

== Description ==

A sitemap plugin to make it easier for your site to show all your pages, posts, archives, categories and tags in an easy to read format without any need for template modification or html/php knowledge.

1. Order the output anyway you want with the use of the shortcode.
1. Order the output of the Pages, Posts, Custom Post Types, Archives, Categories and Tags.
1. Show/hide Pages, Posts, Custom Post Types, Archives, Categories and Tags.
1. Optionally show categories and/or tags as a bullet list, or as a tag cloud.
1. Exclude Pages, Posts, Custom Post Types, Categories and Tags IDs.
1. Limit the amount of posts, custom post types, archives, categories and tags displayed.
1. Change the archive type from the WordPress default.
1. Show/hide Categories and Tags which have no posts associated to them.
1. Show/hide how many posts are in each Archive, Category or Tag.
1. Optionally name the sections different from the default of Pages, Posts, Archives, Categories and Tags.
1. Hierarchical list of pages and categories.
1. Supports I18n for translation.
1. Supports use of the wordpress shortcode for including the sitemap in pages and posts.
1. Works on WordPress Multisite (WPMU) blogs.
1. Comes with an uninstaller, if you dont want it anymore just deactivate the plugin and delete it from within wordpress and it will delete all of its settings itself.

I cant think of anything else that I personally would need this plugin to do for my own use, if anyone feels it doesn't meet what they need, or has any suggestions as to how to make it better then do please get in touch with me and I will see what I can do to accomodate your requests.

WP Realtime Sitemap is available in:-

* English.
* Brazilian Portuguese by Gervasio Antonio.
* Czech by Libor Cerny.
* Russian by [ssvictors](http://wordpress.org/support/profile/ssvictors).
* Spanish by Francois-Xavier Gonzalez.

Please rate this plugin and/or make a [donation](http://www.daniel-tweedy.co.uk/redir/wordpress-plugins-donation/ "PayPal donation") if you find it useful, thank you.

== Installation ==

= Instructions for installing via download from wordpress.org =

1. Download and extract the Plugin zip file.
1. Upload the files to `/wp-content/plugins/wp-realtime-sitemap` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

= Instruction for installing from within your own blog =

1. Go to the Plugins => Add New page.
1. Enter 'WP Realtime Sitemap' (without quotes) in the textbox and click the 'Search Plugins' button.
1. In the list of relevant plugins click the 'Install' link for 'WP Realtime Sitemap' on the right hand side of the page.
1. Click the 'Install Now' button on the popup page.
1. Click 'Activate Plugin' to finish installation.

= Once plugin has been activated please follow one of the install options below to show the sitemap on your blog =

1. Click Pages in the left hand menu navigation.
1. Click on the link in the left hand menu navigation that says Add New or the button that says Add New next to Pages in the main content area.
1. Give your page a title I suggest Sitemap, and put the shortcode mentioned on the examples into the wysiwyg box.

*Note*: If you already have a page for your sitemap then put the shortcode in this pages wysiwyg box instead of creating a new page.

== Frequently Asked Questions ==

= I would like to make a donation how can I do this? =

You can make a [Pay Pal donation](http://www.daniel-tweedy.co.uk/redir/wordpress-plugins-donation/ "PayPal donation") by clicking [here](http://www.daniel-tweedy.co.uk/redir/wordpress-plugins-donation/ "PayPal donation"), your [donation](http://www.daniel-tweedy.co.uk/redir/wordpress-plugins-donation/ "PayPal donation") will be very gratefully received thank you!

= Do I need to add the &lt;!--wp-realtime-sitemap--&gt; to a Post or a Page? =

This method is no longer supported, please use the shortcode instead.

= Is there a php code so I can add it to a php template file? =

This method is no longer supported, please use the shortcode instead.

= What should I call the page that I add the sitemap to? =

You can call it whatever you like. I would suggest you call it Site Map.

= I have some pages that I need but are to be hidden and not on the sitemap =

My plugin only shows posts and pages that have the status as published, so if you wish to have a post of page be published but not to be shown, change its status to "privately published" and it will disappear off the sitemap, you can do this easily when editing a post/page with the Publish box on the left hand side, I have included a screeshot to show what to set this box to.  You can also exclude by ID now in the settings.

= I cant get the other short code options to work only the show one now works =

This has been removed in the latest version due to the options in the admin interface being very complex and is easier to choose how you want it to be sorted here, the shortcode is now only used to be able to sort the options differently.

== Screenshots ==

1. Settings page in the admin area.
2. Output as displayed on Twenty Ten theme.
3. How to hide a post and/or page off the sitemap using the published privately option in WordPress.

== Examples ==

The shortcode will still use the database, this will be the default options now so you can use a small shortcode in your page and not have to put a long line just to get what you want, you can however do this if you wish to change the default options.

Show pages: `[wp-realtime-sitemap show="pages"]`.

Show posts: `[wp-realtime-sitemap show="posts"]`.

Show custom post types: `[wp-realtime-sitemap show="customposts"]`.

Show archives: `[wp-realtime-sitemap show="archives"]`.

Show categories: `[wp-realtime-sitemap show="categories"]`.

Show tags: `[wp-realtime-sitemap show="tags"]`.

Show everything (fixed order of: pages, posts, custom post types, archives, categories, tags): `[wp-realtime-sitemap show="all"]`.

== Translations ==

If you're multi-lingual then you may want to consider donating a translation, WordPress is available in several different languages, see http://codex.wordpress.org/WordPress_in_Your_Language for more information.

Currently translated into the following languages :-

* Brazilian Portuguese *needs updating* - kindly done by Gervasio Antonio.
* Czech *needs updating* - kindly done by Libor Cerny.
* Russian *needs updating* - kindly done by [ssvictors](http://wordpress.org/support/profile/ssvictors).
* Spanish *needs updating* - kindly done by Francois-Xavier Gonzalez.

All translators will have a link to their website placed on the plugin homepage on my site, and on the wordpress plugin homepage, in addition to being an individual supporter.

Full details of producing a translation can be found in this [guide to translating WordPress plugins](http://urbangiraffe.com/articles/translating-wordpress-themes-and-plugins/).

== Changelog ==

= 1.5.1 =
* Fixed issue with default settings being set incorrectly.
* Fixed issue where tags tag cloud was showing categories instead.
* Added missing code to be able to change Posts header.
* Updated wp-realtime-sitemap.pot, wp-realtime-sitemap.po and the rest of the .po translation files.

= 1.5 =
* Completely written all of the options in the admin interface.
* Option to exclude pages, posts, custom post types, archives, categories and tags from the output.
* Now able to limit posts, custom post types, archives, categories and tags from the output.
* No option to limit pages as this is currently broken in WordPress.
* More options for sorting that wasn't included previously.
* Option to change the archive type no longer fixed to monthly.
* Removed sorting options from the WordPress shortcode.
* Fixed code so only runs the code for the section chosen not all sections.

= 1.4.8 =
* Added custom post types, if this was something you have been waiting for, or have requested then please consider making a [donation](http://www.daniel-tweedy.co.uk/redir/wordpress-plugins-donation/ "PayPal donation") thank you!
* Added ability to change the names of the sections from the defaults of Pages, Posts, Archives, Categories and Tags, this is optional if there blank/empty will use the defaults.
* No longer using query_posts to display pages, posts and custom post types, now using get_posts now works correctly with WPMU.
* Added Screenshots of admin interface, and the output of the plugin.
* Fixed bug where was showing comments and comment form on the sitemap page, a great big thank you to [eceleste](http://wordpress.org/support/profile/eceleste) for help with this fix.
* Fixed issue where was output html which wasn't valid for posts, missing the double quotes round the url, thanks to [GreyIBlackJay](http://wordpress.org/support/profile/greyiblackjay) for spotting this.

= 1.4.7.2 =
* Changed constructor so the localization files are initialized with the plugin.
* Spanish translation kindly done by François-Xavier Gonzalez.

= 1.4.7.1 =
* Fixed some duplication errors in the language files.
* Russian translation kindly done by ssvictors.

= 1.4.7 =
* Minor fix to the new variable names, some instances where the old ones were still referenced, instead of the new ones.

= 1.4.6 =
* Updated code to be more cleaner and easier to understand.
* Used WordPress Settings API for options form, and added validation.
* Updated the localization files, still fully translatable right down to the admin area.

= 1.4.5 =
* Removed database code from admin_init as was being called on every admin page.
* Added post limit to show x number of posts only, currently limited to 9999.

= 1.4.4 =
* Added option to reset database settings back to defaults.
* Fixed code when using `[wp-realtime-sitemap show="all"]` and not correctly showing tags and/or categories as tag clouds or not.
* Changed activation code to better upgrade database settings, and clean up old data from the database that is now no longer needed.
* Added Brazilian Portuguese translation files courtesy of gervasioantonio.
* Admin interface now fully translatable.

= 1.4.3 =
* Fixed issue where overwritting `sort_column` variable.

= 1.4.2 =
* Fixed minor bug, where content output would be before whatever was put into the wysiwyg editor, instead of after.
* Wrapped date for posts in a span tag so easier for this to be styled.

= 1.4.1 =
* Minor security update added nonce field to the form, to check request came from your site and not someone elses site who was using the same plugin.

= 1.4 =
* Hot Fix: Removed comment replacement code in favour of shortcodes instead, this was needed to fix an issue on some blogs where php memory limit is set to 64MB.
* Added options to choose to have post count and post date output with the sitemap.
* Streamlined options in the database now instead of several rows for the options in the database, there is now only 1.
* Added code to clean up database from the old way to the new way, preserving your current options also.

= 1.3 =
* Hierarchical list of categories.
* Change code for tags to use wordpress inbuilt functions instead.
* Supports I18n for translation.

= 1.2 =
* Updated code, added settings, support and donate link.
* Fixed display bug.

= 1.1 =
* Optionally show categories and tags as a bullet list, or as a tag cloud.
* Hierarchical list of pages.

= 1.0 =
* First version.

== Upgrade Notice ==

= 1.4.6 =
Renamed form options for Show post count, Show date, Post limit, as a result of this I do regrettably have to tell you you will need to visit the settings page and submit your settings back into the database for these options, otherwise your sitemap will not display on your site.

= 1.4 =
You will need to change the code you have in your pages/posts to show the sitemap, please see plugin page on wordpress.org for more info.

= 1.1 =
Before upgrading you MUST delete the old plugin from your wordpress installation, BEFORE installing the new version! I changed the name of some of the variables stored in the database.
