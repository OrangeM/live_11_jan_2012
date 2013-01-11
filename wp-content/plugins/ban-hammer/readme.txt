=== Ban Hammer ===
Contributors: Ipstenu
Tags: email, ban,registration
Requires at least: 2.5
Tested up to: 3.1
Stable tag: 1.4
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5227973

Prevent people from registering with any email that is listed under your comment moderation blacklist.

== Description ==

We've all had this problem.  A group of spammers from mail.ru are registering to your blog, but you want to keep registration open.  How do you kill the spammers without bothering your clientele?  While you could edit your `functions.php` and block the domain, once you get past a few bad eggs, you have to escalate.

Ban Hammer does that for you, preventing unwanted users from registering.

Instead of using its own database table, Ban Hammer pulls from your list of blacklisted emails from the Comment Blacklist feature, native to WordPress.  Since emails never equal IP addresses, it simply skips over and ignores them.  This means you only have ONE place to update and maintain your blacklist.  When a blacklisted user attempts to register, they get a customizable message that they cannot register.

In addition, Ban Hammer has built in support for StopForumSpam.com which can be turned on or off as desired.

* [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5227973)
* [Plugin Site](http://code.ipstenu.org/ban-hammer/)

==Changelog==

Ban Hammer is a very weird fork of [Philippe Paquet's No Disposable Email plugin](http://www.joeswebtools.com/wordpress-plugins/no-disposable-email/). The original plugin was a straight forward .dat file that listed all the bad emails (generally ones like mailinator that are disposable) and while Ban Hammer doesn't do that, this would not have been possible without that which was done before.

Also credits to WP-Deadbolt, for making me think about SQL and TTC for StopForumSpam integration.

MASSIVE credit to Travis Hamera for the StopForumSpam/cURL fix!

= 1.4 - 16 August, 2010 =

* Checks for presence of the cURL extension. If not found, the option to use StopForumSpam is removed. (using http://cleverwp.com/function-curl-php-extension-loaded/ as recommended by kmaisch )

= 1.3 - 08 July, 2010 =

* Pulling out the WPMU stuff that's never going to happen now that it's MultiSite and doesn't work.

= 1.2 - 08 November, 2009 =

* This lists all users marked by StopForumSpam as spammers, if you're using that option (and not if not). (Thanks to obruchez for the suggestion!).

= 1.1 - 03 May, 2009 =

* Subversion before coffee = BAD.

=  1.0 - 03 May, 2009 =

* First released version.

=  0.3 - 30 March, 2009 =

* The error message is customizable.
* Added support for StopForumSpam.com
* Added in checkbox to use StopForumSpam (default to NO).
* Cleans up after itself on deactivation (deletes the banhammer_foo values from the wp_options table because I HATE when plugins leave themselves).

=  0.2 - 29 March, 2009 =

* Shifted to use the WordPress comment blacklist as source. This was pretty much an 80% re-write from NDE's basis, keeping only the basic check at registration code.

=  0.1 - 28 March, 2009 =

* First release using No Disposable Email's .dat file as a source.

= To Do =

* Check if any banned users managed to register and flag them.
* Put in a delete link from the BanHammer users list.
* HIDE the Users List from menus.

== Installation ==

1. Unpack the zip file and extract the `/ban-hammer/` folder and the files.
2. Using an FTP program, upload the full `/ban-hammer/` folder to your WordPress plugins directory (Example: `/wp-content/plugins/`).
3. Go to **Plugins > Installed** and activate the plugin.
4. Go to **Tools > Ban Hammer** to customize the error message (and banned emails, but it's the same list from your comment moderation so...).

== Screenshots ==

1. Default Error message
2. Admin screen
3. Ban Hammer Users
4. Admin Menu.

== Frequently Asked Questions ==

= If I change the blacklist via Ban Hammer, will it change the Comment Blacklist? =

Yes! They are the exact same list, they use the same fields and they update the same data.  The only reason I put it there was I felt having an all-in-one place to get the data would be better.

= Does this list the rejected registers? =

No.  Since WordPress doesn't list rejected comments (your blacklist goes to a blackhole), I didn't bother with trying to do that here. If enough people think it's a need, I may consider it.

= It breaks when I turn on StopForumSpam checking. Why? =

At a guess, you don't have [cURL support](http://us.php.net/curl). You may need to check with your webhost about that. If they do have cURL setup, share the error with me and I'll try to debug!

= Will you add other spam lists? =

Sure. Or at least I'll try.  I'm not a genius so I may need help with APIs and the right PHP calls.

= Does this work on MultiSite? =

No, it does not. MultiSite uses a totally different signup method.  Also, MultiSite has a built in way to restrict registration, so I have no interest in reinventing that wheel.

= Why doesn't this work AT ALL on my site!? =

I'm not sure. I've gotten a handful of reports from people where it's not working, and for the life of me, I'm stumped. So far, it looks like Zend and/or eAccelerator aren't agreeing with this. If it's failing, please post on the wp.org forums with your server specs (PHP info, server type, etc) and any plugins you're running.