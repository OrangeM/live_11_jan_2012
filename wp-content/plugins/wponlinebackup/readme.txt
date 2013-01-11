=== Online Backup for WordPress ===
Contributors: Driskell
Tags: backup, online backup, wordpress backup, database backup
Requires at least: 2.8.6
Tested up to: 3.0
Stable tag: 1.0.9

Online Backup for WordPress allows you to easily backup your entire WordPress database to your email, desktop or free 50 MiB on our secure servers.

== Description ==

As a blogger you will know how much time and effort goes into producing your content. Being able to backup your blog is essential and having a simple system in place to backup your information is priceless.

Backup Technology's [Online Backup](http://www.backup-technology.com/) plugin offers you 3 backup options as well as a smart scheduling feature to ensure your information is always kept safe.

Every plugin, once an account has been registered with us, offers 50 MiB free space on our secure servers and a host of other features including: locked backups, backup to email, compression, encryption, scheduling and on demand backup.

Blogging is big business and now you have access to a free plugin to prevent your hard work being lost.

Visit Backup Technology's website for more information on their services for WordPress, Online Backup and [Disaster Recovery](http://www.backup-technology.com/); and check out our [Online Backup for WordPress FAQ](https://wordpress.backup-technology.com/FAQ) if you experience any problems.

== Installation ==

Step 1: Download the plugin.

Step 2: Upload the plugin to your blog using the Plugins > Add New > Upload feature in your WordPress Dashboard.

Step 3: Register for your 50 MiB of free space on our [backup portal](https://wordpress.backup-technology.com/ "Online Backup for WordPress Portal").

Step 4: Configure your plugin to enable encryption and provide the login details of your online account by clicking Change Settings on the Tools > Online Backup page.

Step 5: Schedule your backup by clicking Change Schedule on the same page!

A very generous community member has published a video on how to register and install this plugin. JupiterJim has posted this video on his blog which can be found [here](http://www.jupiterjimsmarketingteam.com/online-backup-wordpress-plugin-backup-technology-video-tutorial/)*. Backup Technology is extremely grateful for the effort that JupiterJim has put in to this tutorial. 

*This is an external link, and Backup Technology is not responsible for its content. For more information, please refer to our [privacy policy](http://www.backup-technology.com/Privacy).

== Screenshots ==

1. Online Backup for WordPress dashboard.

== Changelog ==

= 1.0.9 =
* Fixed an issue where encyption could add extra bytes to the end of the compressed file making decompression fail in some compression programs
* Fix issue that could cause password to show as invalid even though it IS valid and online backups do actually work
* Fix for scheduling issue on some servers.

= 1.0.8 =
* In some setups, after a restore, the plugin wouldn't function correctly.
* Improved protection added to the backup file transmission to prevent other plugins adding output.

= 1.0.72 =
* Fixed a fatal error when saving settings.

= 1.0.71 =
* Accounted for WordPress's strict magic GPC quotes.

= 1.0.7 =
* Fixed an issue where one would not be able to disable encryption.
* Added a potential fix for issues on Windows servers.

= 1.0.6 =
* Fixed an issue on WordPress sites where WordPress is not at the root of the domain. (Thanks Richard Benwell for pointing this out and providing a fix!)
* Super cache was breaking the backup fetch. Added a workaround.
* Fixed the uninstaller. (Thanks Chris Larson for pointing this out!)
* Fixes the junk error - it will now report the correct error about temporary directory been cleared. (Thanks Ian Grindey and those who used 1.0.5.1d!)
* Download link now correctly downloads over HTTPS if FORCE_SSL is enabled.
* "Table has no PRIMARY key! Some rows could get missed." no longer shows for tables with UNIQUE keys.
* Various other minor improvements.

= 1.0.5 =
* Fixed so the plugin works in a PHP4 environment.
* Fixed an issue with the download button on manual backups.
* Added a See FAQ link to the "Table does not have PRIMARY key!" warning.
* Improved layout of a few pages to make them easier to understand.
* Changed scheduling so one can configure the exact day, hour or minute for the backup.
* Added a fix for failed online backups and multiple backups getting triggered by wp-cron.
* Added a view log link to view the result of the last backup.
* Adjusted a few error messages to contain possible solutions.
* Various other minor bug fixes and improvements.

= 1.0.3 =
* Fixed an issue where backups would always fail if the server did not support encryption.

= 1.0.2 =
* Minor tweaks and bug fixes.

== Upgrade Notice ==

= 1.0.71 =
This update addresses issues with disabling encryption and issues running on Windows servers.

= 1.0.6 =
Fixes issues with wp_super_cache plugin and sites where WordPress is in a subfolder. Also fixes the junk error so it correctly reports the real error.

= 1.0.5 =
Fixes the failed backup issues some people were experiencing.
NOTE: The plugin no longer uses the built-in WordPress schedules and now has it's own options that are much more configurable: Weekly, Daily, Twice Daily, Four Times Daily and Hourly. The plugin will do its best to allocate the nearest schedule to the one you currently have. However, we recommend you check the schedule settings afterwards to ensure the one selected is the best for your requirements.

= 1.0.3 =
Fixes an issue where backups would always fail if the server did not support encryption.
