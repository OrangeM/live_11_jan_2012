<?php
/*
Plugin Name: Online Backup for WordPress
Plugin URI: http://www.backup-technology.com/online-backup-for-wordpress/
Description: Online Backup for WordPress will automatically backup your WordPress database on a configurable schedule, and can send the backup compressed (and optionally encrypted using DES or AES) to our online vault where you can later retrieve it. Backups can also be emailed to you, and even produced on-demand and downloaded straight to your computer. You can view the current status and change any settings at "Tools -> Online Backup", or by clicking the "View Status" link to the left.
Author: Jason Woods @ Backup Technology
Version: 1.0.9
Author URI: http://www.backup-technology.com/
*/

/*
		    GNU GENERAL PUBLIC LICENSE
		       Version 2, June 1991

 Copyright (C) 1989, 1991 Free Software Foundation, Inc.
                          675 Mass Ave, Cambridge, MA 02139, USA
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.

			    Preamble

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation's software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author's protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone's free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.

		    GNU GENERAL PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program's
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.
Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

			    NO WARRANTY

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

		     END OF TERMS AND CONDITIONS
*/

if (!defined('ABSPATH')) die();

function WPOnlineBackup_Fix_HTTPS($url) { return (FORCE_SSL_ADMIN ? preg_replace('#^http://#i', 'https://', $url) : $url); }

//This is time in milliseconds between progress refreshes when doing manual backups.
//Some servers might block the progress updating if it thinks it is a DoS attack.
//Increasing this value will stop that from happening.
define ('PROGRESS_REFRESH_RATE', 1000);

define ('WPONLINEBACKUP__VERSION__', '1.0.9');
define ('WPONLINEBACKUP__DIR__', dirname(__FILE__));
define ('WPONLINEBACKUP__FILE__', basename(WPONLINEBACKUP__DIR__) . '/' . basename(__FILE__));
define ('WPONLINEBACKUP__TOOLS_URL__', WPOnlineBackup_Fix_HTTPS(get_bloginfo('wpurl')) . '/wp-admin/tools.php');
define ('WPONLINEBACKUP__URL__', WPOnlineBackup_Fix_HTTPS(WP_PLUGIN_URL) . '/' . basename(WPONLINEBACKUP__DIR__));
define ('WPONLINEBACKUP__HURL__', htmlentities(WPONLINEBACKUP__URL__, ENT_QUOTES));
define ('NL', <<<NL


NL
);
define ('DUMP_SEGMENT_SIZE', 50);
define ('COMPRESS_SEGMENT_SIZE', 1048576);
define ('ENCRYPT_SEGMENT_SIZE', 1048576);
define ('STEPPED_INTERVAL', 3);
define ('DUMP_TIME_OUT', 15);
define ('DUMP_GRACE_PERIOD', 10);
define ('BACKUP_SERVER', 'https://wordpress.backup-technology.com');

function WPOnlineBackup_Capture_Junk($output)
{
	return '';
}

class WPOnlineBackup
{
	var $schedule_list = array(
		''		=> 'None',
		'hourly'	=> 'Hourly',
		'4daily'	=> 'Every 6 Hours (Four Times Daily)',
		'2daily'	=> 'Every 12 Hours (Twice Daily)',
		'daily'		=> 'Daily',
		'weekly'	=> 'Weekly',
	);
	var $schedule_days = array(
		0	=> 'Sunday',
		1	=> 'Monday',
		2	=> 'Tuesday',
		3	=> 'Wednesday',
		4	=> 'Thursday',
		5	=> 'Friday',
		6	=> 'Saturday',
	);

	var $core_tables = array(
		'wp_comments',
		'wp_links',
		'wp_options',
		'wp_postmeta',
		'wp_posts',
		'wp_term_relationships',
		'wp_term_taxonomy',
		'wp_terms',
		'wp_usermeta',
		'wp_users',
	);

	var $_status = null;
	var $settings;
	var $schedule;

	var $message;
	var $message_url;

	var $attachment_file;
	var $attachment_ext;

	var $page_hook;

	var $do_timeout = false;

//===== Initialization
//==================================================

	function WPOnlineBackup()
	{
		$this->message_url = WPONLINEBACKUP__TOOLS_URL__ . '?page=' . urlencode(WPONLINEBACKUP__FILE__);

//Upgrade check...
		if (get_option('wponlinebackup_db_version') !== '1.0') $this->Activate();

//Are we retrieving the backup?
		if (array_key_exists('wponlinebackup_fetch', $_GET)) {
			$this->Retrieve_Backup();
			exit;
		}

//Register activation, deactivation, and uninstallation hooks.
		register_activation_hook(WPONLINEBACKUP__FILE__, array(& $this, 'Activate'));
		register_deactivation_hook(WPONLINEBACKUP__FILE__, array(& $this, 'Deactivate'));

//Register schedule actions.
		add_action('WPOnlineBackup_Perform', array(& $this, 'Perform_Scheduled_Backup'));
		add_action('WPOnlineBackup_Perform_Check', array(& $this, 'Perform_Scheduled_Backup_Check'));

		if (is_admin()) {
//Plugin links...
			add_filter('plugin_action_links_' . WPONLINEBACKUP__FILE__, array(& $this, 'Plugin_Actions'));
//Initializing admin page...
			add_action('admin_init', array(& $this, 'Init'));
//Adding the navigation entries...
			add_action('admin_menu', array(& $this, 'Admin_Menu'));
		}
	}

	function Activate()
	{
		global $wpdb;

		if (get_option('wponlinebackup_progress') !== false) {

//Upgrade from 1.0.3 or below, remove old stuff we no longer need.
			delete_option('wponlinebackup_progress');

//Status is drastically changed - remove the old one and allow it to be recreated below.
			delete_option('wponlinebackup_status');

//Update the schedule...
			$schedule = get_option('wponlinebackup_schedule');

			$new_schedule = array(
				'schedule'	=> '',
				'day'		=> 0,
				'hour'		=> '00',
				'minute'	=> '00',
				'next_trigger'	=> null,
				'email'		=> $schedule['email'],
				'email_to'	=> $schedule['email_to'],
				'online'	=> $schedule['online'],
			);

			switch ($schedule['schedule']) {

//None
				case '':
					break;

//Hourly
				case 'hourly':
					$new_schedule['schedule'] = 'hourly';
					break;

//Twice Daily
				case 'twicedaily':
					$new_schedule['schedule'] = '2daily';
					break;

//Daily
				case 'daily':
					$new_schedule['schedule'] = 'daily';
					break;

//Try and get the nearest match
				default:
					$options = wp_get_schedules();
					if (array_key_exists($schedule['schedule'], $options)) {
						if ($options[$schedule['schedule']]['interval'] <= 3600*4) $new_schedule['schedule'] = 'hourly';
						else if ($options[$schedule['schedule']]['interval'] <= 3600*9) $new_schedule['schedule'] = '4daily';
						else if ($options[$schedule['schedule']]['interval'] <= 3600*18) $new_schedule['schedule'] = '2daily';
						else if ($options[$schedule['schedule']]['interval'] <= 8640*35) $new_schedule['schedule'] = 'daily';
						else $new_schedule['schedule'] = 'weekly';
					}
					break;

			}

			update_option('wponlinebackup_schedule', $new_schedule);

		}

//Check table version - create if neccessary.
		if (($exists = $wpdb->get_var('SHOW TABLES LIKE \'' . $wpdb->prefix . 'online_backup\'')) !== $wpdb->prefix . 'online_backup' || get_option('wponlinebackup_db_version') != '1.0') {

//Don't bother with dbDelta - we can drop and recreate - we need this table to contain a single row regardless.
			if ($exists === $wpdb->prefix . 'online_backup') $wpdb->query('DROP TABLE `' . $wpdb->prefix . 'online_backup`');

			$wpdb->query(<<<SQL
CREATE TABLE `{$wpdb->prefix}online_backup` (
 `status` tinyint(1) NOT NULL,
 `time` int(10) unsigned NOT NULL,
 `progress` text NOT NULL,
 PRIMARY KEY  (`status`, `time`)
);
SQL
			);

//Pre-populate.
			$wpdb->insert(
				$wpdb->prefix . 'online_backup',
				array(
					'status'	=> 0,
					'time'		=> 0,
					'progress'	=> serialize(array()),
				),
				array('%d', '%d', '%s')
			);

			update_option('wponlinebackup_db_version', '1.0');

		}

//Create default settings.
		add_option('wponlinebackup_settings', array(
			'selection_method'	=> 'exclude',
			'selection_list'	=> array(),
			'tmp_dir'		=> '/tmp/',
			'username'		=> '',
			'password'		=> '',
			'encryption_type'	=> '',
			'encryption_key'	=> '',
		), '', 'no');

		add_option('wponlinebackup_status', array(
			'log'		=> null,
			'last_start'	=> null,
			'last_end'	=> null,
			'last_comp'	=> null,
			'last_log'	=> null,
		), '', 'no');

		add_option('wponlinebackup_schedule', array(
			'schedule'	=> '',
			'day'		=> 0,
			'hour'		=> 0,
			'minute'	=> 0,
			'next_trigger'	=> null,
			'email'		=> false,
			'email_to'	=> '',
			'online'	=> true,
		), '', 'yes');

		$this->Load_Schedule();
		$this->Restart_Schedule();
	}

	function Deactivate()
	{
		global $wpdb;
		wp_clear_scheduled_hook('WPOnlineBackup_Perform');
		wp_clear_scheduled_hook('WPOnlineBackup_Perform_Check');
	}

	function Plugin_Actions($actions)
	{
		array_unshift($actions, '<a href="' . WPONLINEBACKUP__TOOLS_URL__ . '?page=' . WPONLINEBACKUP__FILE__ . '">View Status</a>');
		return $actions;
	}

	function Init()
	{
//Register AJAX action for dynamic manual backup.
		add_action('wp_ajax_wponlinebackup_progress', array(& $this, 'AJAX_Progress'));

//Starting / continuing a static manual backup.
		if (current_user_can(10) && array_key_exists('continuebackupnonce', $_GET) && wp_verify_nonce($_GET['continuebackupnonce'], 'continuebackup')) {
			$this->Load_Settings();
			$result = $this->Perform_Manual_Backup();
			if ($result > 0) {
//TODO:Clean code
				$this->do_timeout = wp_create_nonce('continuebackup');
			}
		}
	}

	function Admin_Menu() {
		global $wpdb;
//Add a menu item to the Tools section.
		$this->page_hook = add_submenu_page('tools.php', 'Online Backup', 'Online Backup', 10, WPONLINEBACKUP__FILE__, array(& $this, 'Print_Page'));
		add_action('load-' . $this->page_hook, array(& $this, 'Prepare_Page'));
	}

//===== General functions
//==================================================

	function die_text($text, $capture = false)
	{
		header('Content-Type: text/plain');
		echo $text;
		if ($capture) ob_start('WPOnlineBackup_Capture_Junk');
		exit;
	}

	function Fix_Time($val, $text = false)
	{
		$s = $text ? ' ' : '&nbsp;';
		$sb = array();
		if ($val >= 86400) {
			$v = $val % 86400;
			$sb[] = (($val - $v) / 86400) . $s . 'd';
			$val = $v;
		}
		if ($val >= 3600) {
			$v = $val % 3600;
			$sb[] = (($val - $v) / 3600) . $s . 'h';
			$val = $v;
		}
		if ($val >= 60) {
			$v = $val % 60;
			$sb[] = (($val - $v) / 60) . $s . 'm';
			$val = $v;
		}
		if (count($sb) == 0 || $val != 0) $sb[] = $val . $s . 's';
		return implode($s, $sb);
	}

	function Fix_B($val, $text = false)
	{
		$s = $text ? ' ' : '&nbsp;';
		if ($val >= 1125899906842624) {
			$val /= 1125899906842624;
			return round($val, 2) . $s . 'PiB';
		} else if ($val >= 1099511627776) {
			$val /= 1099511627776;
			return round($val, 2) . $s . 'TiB';
		} else if ($val >= 1073741824) {
			$val /= 1073741824;
			return round($val, 2) . $s . 'GiB';
		} else if ($val >= 1048576) {
			$val /= 1048576;
			return round($val, 2) . $s . 'MiB';
		} else if ($val >= 1024) {
			$val /= 1024;
			return round($val, 2) . $s . 'KiB';
		}
		return round($val, 2) . $s . 'B';
	}

	function Max_Upload_Size()
	{
		$memory_limit = ini_get('memory_limit');
		$post_max_size = ini_get('post_max_size');
		$upload_max_filesize = ini_get('upload_max_filesize');

		if (preg_match('/^\\s*[0-9]+\\s*(K|M|G)?\\s*$/', $memory_limit, $matches)) {
			switch ($matches[1]) {
				case 'K': $m = 1024; break;
				case 'M': $m = 1024*1024; break;
				case 'G': $m = 1024*1024*1024; break;
				default: $m = 1; break;
			}
		} else $m = 1;
		$memory_limit = (intval($memory_limit) * $m) - 5*1024*1024;

		if (preg_match('/^\\s*[0-9]+\\s*(K|M|G)?\\s*$/', $post_max_size, $matches)) {
			switch ($matches[1]) {
				case 'K': $m = 1024; break;
				case 'M': $m = 1024*1024; break;
				case 'G': $m = 1024*1024*1024; break;
				default: $m = 1; break;
			}
		} else $m = 1;
		$post_max_size = (intval($post_max_size) * $m) - 5*1024*1024;

		if (preg_match('/^\\s*[0-9]+\\s*(K|M|G)?\\s*$/', $upload_max_filesize, $matches)) {
			switch ($matches[1]) {
				case 'K': $m = 1024; break;
				case 'M': $m = 1024*1024; break;
				case 'G': $m = 1024*1024*1024; break;
				default: $m = 1; break;
			}
		} else $m = 1;
		$upload_max_filesize = intval($upload_max_filesize) * $m;

		return min($memory_limit, $post_max_size, $upload_max_filesize);
	}

	function Calculate_Schedule($schedule)
	{
		global $Core;

		switch ($schedule['schedule']) {

			case 'hourly':
				$now = time();

				$next = strtotime('today ' . date('H', $now) . ':' . str_pad($schedule['minute'], 2, '0', STR_PAD_LEFT));
				if ($next < $now + 60) $next = strtotime('+1 hour', $next);
				break;

			case '4daily':
				$now = time();

				while ($schedule['hour'] >= 6) $schedule['hour'] -= 6;

				$next = strtotime('today ' . str_pad($schedule['hour'], 2, '0', STR_PAD_LEFT) . ':' . str_pad($schedule['minute'], 2, '0', STR_PAD_LEFT));
				while ($next < $now + 60) $next = strtotime('+6 hours', $next);
				break;

			case '2daily':
				$now = time();

				while ($schedule['hour'] >= 12) $schedule['hour'] -= 12;

				$next = strtotime('today ' . str_pad($schedule['hour'], 2, '0', STR_PAD_LEFT) . ':' . str_pad($schedule['minute'], 2, '0', STR_PAD_LEFT));
				while ($next < $now + 60) $next = strtotime('+12 hours', $next);
				break;

			case 'daily':
				$now = time();

				$next = strtotime('today ' . $schedule['hour'] . ':' . $schedule['minute']);
				while ($next < $now + 60) $next = strtotime('+1 day', $next);
				break;

			case 'weekly':
				$now = time();
				$day = $this->schedule_days[$schedule['day']];

				$next = strtotime('this ' . $day . ' ' . str_pad($schedule['hour'], 2, '0', STR_PAD_LEFT) . ':' . str_pad($schedule['minute'], 2, '0', STR_PAD_LEFT));
				if ($next < $now + 60) $next = strtotime('next ' . $day . ' ' . str_pad($schedule['hour'], 2, '0', STR_PAD_LEFT) . ':' . str_pad($schedule['minute'], 2, '0', STR_PAD_LEFT), $next);
				break;

			default:
				$next = false;
				break;

		}

		if ($next === -1) $next = false;

		return $next;
	}

	function _backquote($value)
	{
		return '`' . $value . '`';
	}

	function _implode_backquote($delimeter, $array)
	{
		reset($array);
		list (, $value) = each($array);
		$return = '`' . $value . '`';
		while (list (, $value) = each($array)) {
			$return .= $delimeter . '`' . $value . '`';
		}
		return $return;
	}

	function _escape_string($value)
	{
		//\x00, \n, \r, \, ', " and \x1a.
		return '\'' . mysql_real_escape_string($value) . '\'';
	}

	function phpmailer_init(& $phpmailer)
	{
		$phpmailer->AddAttachment($this->attachment_file, 'WPOnlineBackup_' . date('d-m-Y-H-i-s') . '.bak' . $this->attachment_ext);
	}

//===== Settings functions
//==================================================

	function Load_Settings()
	{
//Load bits and bobs.
		$this->settings = get_option('wponlinebackup_settings');
		if (!preg_match('#(?:/|\\\\)$#', $this->settings['tmp_dir'])) $this->settings['tmp_dir'] .= '/';
		if (!preg_match('#^(?:/|\\\\|[A-Za-z]:)#', $this->settings['tmp_dir'])) $this->settings['tmp_dir'] = ABSPATH . $this->settings['tmp_dir'];
	}

	function Load_Schedule()
	{
//Load scheduler information.
		$this->schedule = get_option('wponlinebackup_schedule');
	}

	function Fetch_Backup_Status()
	{
		global $wpdb;
//Grab general status.
		if (is_null($this->_status)) {
			$this->_status = get_option('wponlinebackup_status');
			list ($this->_status['status'], $this->_status['time'], $this->_status['progress']) = $wpdb->get_row('SELECT `status`, `time`, `progress` FROM `' . $wpdb->prefix . 'online_backup` LIMIT 1', ARRAY_N);
			$this->_status['progress'] = @unserialize($this->_status['progress']);
			if ($this->_status['progress'] === false) $this->_status['progress'] = array();
		}
		return $this->_status;
	}

	function Update_Backup_Mutex(& $status, $new_status)
	{
//Update the mutex fields, and see how many rows are updated - should prevent scheduled backups overlapping.
		global $wpdb;
		$status['progress']['counter']++;
		$now = time();
		$result = $wpdb->query('UPDATE `' . $wpdb->prefix . 'online_backup` SET `status` = ' . $new_status . ', `time` = ' . $now . ', `progress` = ' . $this->_escape_string(serialize($status['progress'])) . ' WHERE `status` = ' . $status['status'] . ' AND `time` = ' . $status['time']);
		if ($result) {
			$status['status'] = $new_status;
			$status['time'] = $now;
			$this->_status = $status;
			$save_status = $status;
			unset($save_status['status'], $save_status['time'], $save_status['progress']);
			update_option('wponlinebackup_status', $save_status);
			return true;
		}
		return false;
	}

//===== UI helper functions
//==================================================

	function Print_Message_Timeout()
	{
?>
<meta http-equiv="refresh" content="1; url=<?php echo htmlentities($this->message_url, ENT_QUOTES); ?>" />
<?php
	}

	function Print_Message()
	{
?>
<p>
	<span style="background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/tbggre.png')"><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/accept.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;<?php echo htmlentities($this->message, ENT_QUOTES); ?></span>
</p>
<form action="<?php echo htmlentities($this->message_url, ENT_QUOTES); ?>" method="post">
<p>
	<input type="submit" value="Redirecting in a moment... Click here to redirect immediately..." class="button-primary" />
</p>
</form>
<?php
	}

	function Print_Errors()
	{
?>
<p>
	<span style="background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/tbgred.png')"><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/exclamation.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;<?php echo $this->message; ?></span>
</p>
<?php
	}

//===== UI functions (Preparation)
//==================================================

	function Prepare_Page()
	{
		$this->Load_Settings();
		$this->Load_Schedule();

//Queue the scripts we need...
		wp_enqueue_script('common');
		wp_enqueue_script('wp-lists');
		wp_enqueue_script('postbox');
		wp_enqueue_script('sack');
		wp_enqueue_script('wponlinebackup', WPONLINEBACKUP__URL__ . '/scripts/global.js');

//If we are processing a manual backup, skip the rest.
		if ($this->Prepare_Manual_Backup()) return;

//We've requested the settings page...
		if (array_key_exists('settings', $_GET)) {

			$this->Prepare_Settings_Page();
			return;

		}

//We've requested the schedule page...
		if (array_key_exists('schedule', $_GET)) {

			$this->Prepare_Schedule_Page();
			return;

		}

//We've requested the decryption page...
		if (array_key_exists('decrypt', $_GET)) {

			$this->Prepare_Decryption_Page();
			return;

		}

//We've requested the log page...
		if (array_key_exists('log', $_GET)) {

			$this->Prepare_Log_Page();
			return;

		}

//Show the front page.
		wp_enqueue_script('wponlinebackup_status', WPONLINEBACKUP__URL__ . '/scripts/status.js');
		if ($this->schedule['online'] && $this->settings['username'] != '') {
			wp_enqueue_script('wponlinebackup_overview', BACKUP_SERVER . '/API/Overview?username=' . urlencode($this->settings['username']) . '&password=' . urlencode($this->settings['password']) . '&plugin_url=' . WPONLINEBACKUP__URL__ . '&nocache=' . time());
		}
		add_meta_box('wponlinebackupoverview', 'Overview', array(& $this, 'Print_Overview_Page'), 'wponlinebackup', 'normal');
		add_meta_box('wponlinebackupbackup', 'Perform a Manual Backup', array(& $this, 'Print_Backup_Page'), 'wponlinebackup', 'normal');
	}

	function Prepare_Manual_Backup()
	{
//Starting a manual backup?
		if (array_key_exists('startbackupnonce', $_POST) && wp_verify_nonce(strval($_POST['startbackupnonce']), 'startbackup')) {

//Validate the targets...
			if (array_key_exists('transmit_targets', $_POST) && is_array($_POST['transmit_targets'])) {

				$methods = array();

				foreach ($_POST['transmit_targets'] as $method) {

//Validate email address is valid.
					if ($method == 'email') {
						$email = array_key_exists('transmit_email_to', $_POST) ? stripslashes(strval($_POST['transmit_email_to'])) : '';
						if (!preg_match('/^[a-zA-Z0-9_\\-.]+@[a-zA-Z0-9_\\-.]+$/', $email)) {
							$this->message = 'The email address you specified was not valid.';
							add_meta_box('wponlinebackupmessage', 'Error', array(& $this, 'Print_Errors'), 'wponlinebackup', 'normal');
							return;
						}
						$methods['email'] = $email;
						continue;
					}

//Ignore unknown targets.
					if ($method != 'download' && $method != 'online') continue;

					$methods[strval($method)] = 1;

				}

//Mark as a manual backup.
				$methods['manual'] = 1;

			} else {

				$this->message = 'You must specify at least one of the backup options.';
				add_meta_box('wponlinebackupmessage', 'Error', array(& $this, 'Print_Errors'), 'wponlinebackup', 'normal');
				return true;

			}

			$result = $this->Start_Backup($methods);
			if (!$result) {
				$this->message = 'A backup is already in progress. Please wait for this backup to complete before running a manual one. If the backup hung it should timeout in 30 seconds.';
				add_meta_box('wponlinebackupmessage', 'Error', array(& $this, 'Print_Errors'), 'wponlinebackup', 'normal');
				return true;
			}

//TODO:Clean code
			$this->do_timeout = wp_create_nonce('continuebackup');

//Does the client support Javascript and AJAX? If so, update dynamically via javascript, otherwise update statically via META refresh.
			if (array_key_exists('isajax', $_POST) && strval($_POST['isajax']) == 'no') {

				$static = true;

			} else {

				$static = false;
//Queue the AJAX scripts.
				wp_enqueue_script('wponlinebackup_progress', WPONLINEBACKUP__URL__ . '/scripts/progress.js');
				wp_localize_script('wponlinebackup_progress', 'wponlinebackup_vars', array('url' => WPONLINEBACKUP__URL__, 'nonce' => $this->do_timeout, 'refresh' => PROGRESS_REFRESH_RATE));

//Print the backup progress.
				add_meta_box('wponlinebackupprogress', 'Progress', array(& $this, 'Print_Progress_Page'), 'wponlinebackup', 'normal');
				return true;

			}

		} else $static = false;

//Print the static backup progress if we starting a backup or if we continuing after a refresh.
		if ($static || (array_key_exists('continuebackupnonce', $_GET) && wp_verify_nonce($_GET['continuebackupnonce'], 'continuebackup'))) {

//TODO:Clean code
			if ($this->do_timeout) add_action('admin_head-' . $this->page_hook, array(& $this, 'Header_Progress_Page'));

			add_meta_box('wponlinebackupprogress', 'Progress', array(& $this, 'Print_Progress_Page'), 'wponlinebackup', 'normal');
			return true;

		}
	}

	function Prepare_Settings_Page()
	{
		global $wpdb;

//Are we saving settings?
		if (array_key_exists('savesettingsnonce', $_POST) && wp_verify_nonce(strval($_POST['savesettingsnonce']), 'savesettings')) {

			$errors = array();

			if (array_key_exists('selection_method', $_POST)) $this->settings['selection_method'] = $_POST['selection_method'] === 'include' ? 'include' : 'exclude';
			else $this->settings['selection_method'] = 'include';

			$this->settings['selection_list'] = array();
			if (array_key_exists('selection_list', $_POST) && is_array($_POST['selection_list'])) {
				$tables = $wpdb->get_results('SHOW TABLES', ARRAY_N);
				foreach ($tables as $key => $entry) $tables[$key] = $entry[0];
				foreach ($_POST['selection_list'] as $key => $value) {
					if (in_array($value = stripslashes(strval($value)), $tables)) {
						$this->settings['selection_list'][] = $value;
					}
				}
			}

			if (array_key_exists('tmp_dir', $_POST)) $this->settings['tmp_dir'] = stripslashes(strval($_POST['tmp_dir']));
			else $this->settings['tmp_dir'] = '/tmp';

			if (!preg_match('#(?:/|\\\\)$#', $this->settings['tmp_dir'])) $this->settings['tmp_dir'] .= '/';
			if (!preg_match('#^(?:/|\\\\|[A-Za-z]:)#', $this->settings['tmp_dir'])) $this->settings['tmp_dir'] = ABSPATH . $this->settings['tmp_dir'];

			if (!file_exists($this->settings['tmp_dir']) || !is_dir($this->settings['tmp_dir'])) {
				$errors[] = 'The temporary directory specified was not found! Please ensure the path is correct and that it is writable by PHP.';
			} else {
				$f = @fopen($this->settings['tmp_dir'] . '/wponlinebackup.test_write', 'w');
				if ($f === false) {
					$errors[] = 'The temporary directory specified does not seem to writable by PHP. Please check the permissions or choose an alternative path.';
				}
				@fclose($f);
				@unlink($this->settings['tmp_dir'] . '/wponlinebackup.test_write');
			}

			if (array_key_exists('username', $_POST)) $this->settings['username'] = stripslashes(strval($_POST['username']));
			if (array_key_exists('password', $_POST)) $this->settings['password'] = stripslashes(strval($_POST['password']));

			if (!array_key_exists('encryption_type', $_POST)) $_POST['encryption_type'] = $this->settings['encryption_type'];

			switch (strval($_POST['encryption_type'])) {
				default:
					$_POST['encryption_type'] = '';
				case 'AES256':
					$length = 32;
				case 'AES196':
					if ($length == 0) $length = 24;
				case 'AES128':
					if ($length == 0) $length = 16;
				case 'DES':
					if ($length == 0) $length = 8;
					$this->settings['encryption_type'] = $_POST['encryption_type'];
					break;
			}

			if (array_key_exists('encryption_key', $_POST)) $this->settings['encryption_key'] = stripslashes(strval($_POST['encryption_key']));
			else $this->settings['encryption_key'] = '';
			if ($this->settings['encryption_type'] != '') {
				if (strlen($this->settings['encryption_key']) > $length) {
					$errors[] = 'The encryption key specified must be no longer than ' . $length . ' characters in length for ' . $_POST['encryption_type'] . ' encryption.';
				}
			} else {
				if (strlen($this->settings['encryption_key']) > $length) {
					$errors[] = 'The encryption key specified must be no longer than ' . $length . ' characters in length.';
				}
			}

			if (count($errors)) {
				$show_form = true;
				$this->message = 'The information provided had the following problems:<br />' . NL . implode('<br />' . NL, $errors);
				add_meta_box('wponlinebackuperrors', 'Errors', array(& $this, 'Print_Errors'), 'wponlinebackup', 'normal');
			} else {
				$show_form = false;
				update_option('wponlinebackup_settings', $this->settings);
				$this->message = 'Settings saved successfully.';
				add_action('admin_head-' . $this->page_hook, array(& $this, 'Print_Message_Timeout'));
				add_meta_box('wponlinebackupsettings', 'Settings', array(& $this, 'Print_Message'), 'wponlinebackup', 'normal');
			}

		} else $show_form = true;

//Show the form if needed.
		if ($show_form) {
			add_meta_box('wponlinebackupsettings', 'Settings', array(& $this, 'Print_Settings_Page'), 'wponlinebackup', 'normal');
		}
	}

	function Prepare_Schedule_Page()
	{
		if (array_key_exists('saveschedulenonce', $_POST) && wp_verify_nonce(strval($_POST['saveschedulenonce']), 'saveschedule')) {

			$errors = array();

			if (array_key_exists('email', $_POST) && strval($_POST['email']) == '1') {
				$email = array_key_exists('email_to', $_POST) ? stripslashes(strval($_POST['email_to'])) : '';
				if (!preg_match('/^[a-zA-Z0-9_\\-.]+@[a-zA-Z0-9_\\-.]+$/', $email)) {
					$errors[] = 'The email address you specified does not appear to be valid.';
				}
				$this->schedule['email'] = true;
				$this->schedule['email_to'] = $email;
			} else {
				$this->schedule['email'] = false;
				$this->schedule['email_to'] = '';
			}

			if (array_key_exists('online', $_POST) && strval($_POST['online']) == '1') {
				$this->schedule['online'] = true;
			} else $this->schedule['online'] = false;

			$this->schedule['schedule'] = array_key_exists('schedule', $_POST) ? strval($_POST['schedule']) : '';
			if (!array_key_exists($this->schedule['schedule'], $this->schedule_list)) $this->schedule['schedule'] = '';

			$this->schedule['day'] = array_key_exists('day', $_POST) ? intval($_POST['day']) : 0;
			if ($this->schedule['day'] < 0 || $this->schedule['day'] > 6) $this->schedule['day'] = 0;

			$this->schedule['hour'] = array_key_exists('hour', $_POST) ? strval($_POST['hour']) : '00';
			if (!preg_match('/^(?:[0-1]?[0-9]|2[0-3])$/', $this->schedule['hour'])) {
				$errors[] = 'The hour specified is not valid. The valid range is 0-23.';
			}

			$this->schedule['minute'] = array_key_exists('minute', $_POST) ? strval($_POST['minute']) : '00';
			if (!preg_match('/^[0-5]?[0-9]$/', $this->schedule['minute'])) {
				$errors[] = 'The minute specified is not valid. The valid range is 0-59.';
			}

			if (count($errors)) {
				$show_form = true;
				$this->message = 'The information provided had the following problems:<br />' . NL . implode('<br />' . NL, $errors);
				add_meta_box('wponlinebackuperrors', 'Errors', array(& $this, 'Print_Errors'), 'wponlinebackup', 'normal');
			} else {
				$this->Restart_Schedule(false);

				$show_form = false;
				update_option('wponlinebackup_schedule', $this->schedule);
				$this->message = 'Schedule saved successfully.';
				add_action('admin_head-' . $this->page_hook, array(& $this, 'Print_Message_Timeout'));
				add_meta_box('wponlinebackupschedule', 'Schedule', array(& $this, 'Print_Message'), 'wponlinebackup', 'normal');
			}

		} else $show_form = true;

		if ($show_form) {
			add_meta_box('wponlinebackupschedule', 'Schedule', array(& $this, 'Print_Schedule_Page'), 'wponlinebackup', 'normal');
		}
	}

	function Prepare_Decryption_Page()
	{
		if (array_key_exists('decryptbackupnonce', $_POST) && wp_verify_nonce(strval($_POST['decryptbackupnonce']), 'decryptbackup')) {

			$errors = array();

			if (!array_key_exists('file', $_FILES) || $_FILES['file']['error'] == UPLOAD_ERR_NO_FILE) {
				$errors[] = 'You did not specify a file to upload.';
			} else if ($_FILES['file']['error'] == UPLOAD_ERR_INI_SIZE) {
				$errors[] = 'The file specified was too large. (Maximum size your server is configured to allow is ' . $this->Fix_B($this->Max_Upload_Size()) . '.)';
			} else if ($_FILES['file']['error'] != UPLOAD_ERR_OK) {
				$errors[] = 'An error occurred during file upload. Please try again. (PHP upload error code: ' . $_FILES['file']['error'] . '.)';
			} else {
				@unlink($this->settings['tmp_dir'] . 'decrypt_backup.bak');
				@trigger_error('');
				if (@move_uploaded_file($_FILES['file']['tmp_name'], $this->settings['tmp_dir'] . 'decrypt_backup.bak') === false) {
					$error = error_get_last();
					$errors[] = 'An error occured processing the uploaded file. The error message was: ' . htmlentities($error['message'], ENT_QUOTES);
				}
			}

			if (!array_key_exists('encryption_type', $_POST)) $_POST['encryption_type'] = $type;
			$length = 0;
			switch (strval($_POST['encryption_type'])) {
				default:
					$_POST['encryption_type'] = '';
				case 'AES256':
					$length = 32;
				case 'AES196':
					if ($length == 0) $length = 24;
				case 'AES128':
					if ($length == 0) $length = 16;
				case 'DES':
					if ($length == 0) $length = 8;
					$type = $_POST['encryption_type'];
					break;
			}

			if (array_key_exists('encryption_key', $_POST)) $key = strval($_POST['encryption_key']);
			else $key = '';
			if ($type != '') {
				if (strlen($key) > $length) {
					$errors[] = 'The encryption key specified must be no longer than ' . $length . ' characters in length for ' . $_POST['encryption_type'] . ' encryption.';
				}
			} else {
				if (strlen($key) > $length) {
					$errors[] = 'The encryption key specified must be no longer than ' . $length . ' characters in length.';
				}
			}

			if (count($errors)) {
				@unlink($this->settings['tmp_dir'] . 'decrypt_backup.bak');
				$this->message = 'The information provided had the following problems:<br />' . NL . implode('<br />' . NL, $errors);
				add_meta_box('wponlinebackuperrors', 'Errors', array(& $this, 'Print_Errors'), 'wponlinebackup', 'normal');
			} else {
				$result = $this->Decrypt_Backup($this->settings['tmp_dir'] . 'decrypt_backup.bak', preg_replace('/\\.enc$/i', '', $_FILES['file']['name']), $type, $key);
				@unlink($this->settings['tmp_dir'] . 'decrypt_backup.bak');
				if ($result === true) exit;
				$this->message = $result;
				add_meta_box('wponlinebackuperrors', 'Errors', array(& $this, 'Print_Errors'), 'wponlinebackup', 'normal');
			}

		}

		add_meta_box('wponlinebackupdecrypt', 'Decrypt Backup', array(& $this, 'Print_Decryption_Page'), 'wponlinebackup', 'normal');
	}

	function Prepare_Log_Page()
	{
		add_meta_box('wponlinebackuplog', 'Backup Log', array(& $this, 'Print_Log_Page'), 'wponlinebackup', 'normal');
	}

//===== UI functions (Print)
//==================================================

	function Print_Page()
	{
?>
<?php wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false); ?>
<?php wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false); ?>
<div class="wrap">
<?php screen_icon('tools'); ?>
<h2>Online Backup for WordPress by Backup Technology</h2>
<div class="postbox-container" style="width: 100%"><div id="poststuff" class="metabox-holder">
<?php do_meta_boxes('wponlinebackup', 'normal', null); ?>
</div></div>
</div>
<?php
	}

	function Print_Settings_Page()
	{
		global $wpdb;

		$tables = $wpdb->get_results('SHOW TABLES', ARRAY_N);

		$core_tables = array();
		$html = array();

		foreach ($tables as $entry) {

			$entry = $entry[0];

			if ($entry == $wpdb->prefix . 'online_backup') continue;
			else if (in_array($entry, $this->core_tables)) {
				$entry = htmlentities($entry, ENT_QUOTES);
				$core_tables[] = "\t&middot; {$entry}";
				continue;
			} else if (in_array($entry, $this->settings['selection_list'])) $checked = ' checked="checked"';
			else $checked = '';

			$entry = htmlentities($entry, ENT_QUOTES);

			$html[] = "\t<input type=\"checkbox\" name=\"selection_list[]\" id=\"selection_list_{$entry}\" value=\"{$entry}\"{$checked} />&nbsp;<label for=\"selection_list_{$entry}\">{$entry}</label>";

		}

		$html = implode('<br />' . NL, $html);
		$core_tables = implode('<br />' . NL, $core_tables);

		if (function_exists('mcrypt_module_open')) {

			$has_mcrypt = true;
			$ciphers = array();

			if ($c = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_CBC, '')) {
				$ciphers[] = 'DES';
				mcrypt_module_close($c);
			}

			if ($c = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '')) {
				$ciphers[] = 'AES128';
				$ciphers[] = 'AES192';
				$ciphers[] = 'AES256';
				mcrypt_module_close($c);
			}

			$has_cipher = (count($ciphers) != 0);

		} else $has_mcrypt = false;
?>
<form action="tools.php?page=<?php echo urlencode(WPONLINEBACKUP__FILE__); ?>&amp;settings" method="post">
<?php wp_nonce_field('savesettings', 'savesettingsnonce', false); ?>
<table class="form-table">
<tr valign="top">
<th scope="row">Tables to backup:</th>
<td><p>Core WordPress tables: (These are always backed up.)<br />
<?php echo $core_tables; ?></p>
<p>Custom / Plugin tables:</p>
<p><input type="radio" name="selection_method" id="selection_method_include" value="include"<?php echo ($this->settings['selection_method'] == 'include' ? ' checked="checked"' : ''); ?> />&nbsp;<label for="selection_method_include"><b>ONLY</b> backup tables selected below (new tables will not be backed up until included here.)</label><br />
<input type="radio" name="selection_method" id="selection_method_exclude" value="exclude"<?php echo ($this->settings['selection_method'] == 'include' ? '' : ' checked="checked"'); ?> />&nbsp;<label for="selection_method_exclude">backup all tables <b>EXCEPT</b> those selected below (new tables will be backed up until excluded here.) [Recommended]</label></p>
<p><?php echo $html; ?></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="tmp_dir">Temporary directory to store backup file:</label></th>
<td><p><input type="text" style="width: 250px" id="tmp_dir" name="tmp_dir" value="<?php echo htmlentities($this->settings['tmp_dir'], ENT_QUOTES); ?>" /><br />
<i>This directory should be secure and outside of your public html directories. The plugin will create a temporary file in this folder to hold completed parts of the backup, and change the permissions to 0600 so only the owner can access it.<br />
If the path starts with a forward slash ( / ) the path will be absolute; otherwise, it will be relative to your WordPress folder (<?php echo htmlentities(ABSPATH, ENT_QUOTES); ?>).</i></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="username">Online Backup for WordPress Portal Username:</label></th>
<td><p><input type="text" style="width: 250px" id="username" name="username" value="<?php echo htmlentities($this->settings['username'], ENT_QUOTES); ?>" /><br />
<i>When a backup is completed, it will be (optionally) encrypted, and then submitted to our servers. Before our servers will accept the backup files, you will need to <a href="https://www.backup-technology.com/online-backup-for-wordpress/">create an account</a>.</i></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="password">Online Backup for WordPress Portal Password:</label></th>
<td><p><input type="password" style="width: 250px" id="password" name="password" value="<?php echo htmlentities($this->settings['password'], ENT_QUOTES); ?>" /></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="encryption_type">Encryption:</label></th>
<td><p>
<?php
	if ($has_mcrypt && $has_cipher) {
?>
<select name="encryption_type" id="encryption_type"><option value=""<?php if ($this->settings['encryption_type'] == '') { ?> selected="selected"<?php } ?>>None [Not Recommended]</option>
<?php
		foreach ($ciphers as $c) {
?>
	<option value="<?php echo htmlentities($c, ENT_QUOTES); ?>"<?php if ($this->settings['encryption_type'] == $c) { ?> selected="selected"<?php } ?>><?php if ($c == 'AES128') { echo $c . ' [Recommended]'; } else { echo $c; } ?></option>
<?php
		}
?>
</select><br />
<i>If you are sending your backups to our online vault, it is highly recommended that you enable encryption. Using encryption will mean nobody can access your backup files without your encryption key. It's kinda like advanced password protection.<br />
DES is the lightest form of encryption. It uses less server resources but provides the least protection.<br />
AES encryption is the better encryption. 128, 192 and 256 are the different types. The larger the number, the more server resources required to encrypt and the better the protection.<br />
We find AES128 has the best balance in that is not too resource intensive and offers great protection.</i></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="encryption_key">Encryption key:</label></th>
<td><p><input type="text" style="width: 250px" id="encryption_key" name="encryption_key" value="<?php echo htmlentities($this->settings['encryption_key'], ENT_QUOTES); ?>" /><br />
<i><span style="background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/tbgred.png')"><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/exclamation.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;<b>ATTENTION! DO NOT LOSE YOUR ENCRYPTION KEY!</b></span><br />
This is the password that will be used to encrypt your backups - you should set it to a bunch of random characters or symbols.<br />
Just remember, your backups can <b>NEVER</b> be recovered if you forget this key. Therefore, it is <b>IMPERATIVE</b> that you write it down somewhere. Please do not contact us regarding lost keys... we will be as helpless as you are.</i>
<?php
	} else {
		if ($has_mcrypt) {
?>
<input type="hidden" name="encryption_type" value="" />
<i>There are no compatible ciphers in your PHP installation. If you wish to enable encryption, please install one of the following libmcrypt ciphers: MCRYPT_DES or MCRYPT_RIJNDAEL128.<br />
<?php
		} else  {
?>
<input type="hidden" name="encryption_type" value="" />
<i>The libmcrypt extension (php-mcrypt) was not found in your PHP installation. Please contact your host or install it yourself if you wish to enable encryption.<br />
<?php
		}
?>
	If you are sending your backups to our online vault, it is highly recommended that you enable encryption. Using encryption will mean nobody can access your backup files without your encryption key. It's kinda like advanced password protection.</i>
<?php
	}
?>
</p></td>
</tr>
<tr valign="top">
<th scope="row">&nbsp;</th>
<td><p><input type="submit" value="Save Settings" class="button-primary" /></p></td>
</tr>
</table>
</form>
<?php
	}

	function Print_Schedule_Page()
	{
		$options = $this->schedule_list;
		foreach ($options as $key => $value) {
			if ($this->schedule['schedule'] == $key)
				$options[$key] = '<option value="' . $key . '" selected="selected">' . $value . '</option>';
			else
				$options[$key] = '<option value="' . $key . '">' . $value . '</option>';
		}
		$options = implode(NL, $options);

		$days = $this->schedule_days;
		foreach ($days as $key => $value) {
			if ($this->schedule['day'] == $key)
				$days[$key] = '<option value="' . $key . '" selected="selected">' . $value . '</option>';
			else
				$days[$key] = '<option value="' . $key . '">' . $value . '</option>';
		}
		$days = implode(NL, $days);
?>
<form action="tools.php?page=<?php echo urlencode(WPONLINEBACKUP__FILE__); ?>&amp;schedule" method="post">
<?php wp_nonce_field('saveschedule', 'saveschedulenonce', false); ?>
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="schedule">Specify the schedule for the backup:</label></th>
<td><p><select name="schedule" id="schedule">
<?php echo $options; ?>
</select></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="day">The day to perform the backup on:</label></th>
<td><p><select name="day" id="day">
<?php echo $days; ?>
</select><br />
<i>This value is only used if the schedule is set to "Weekly".</i></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="hour">The hour to perform the backup on:</label></th>
<td><p><input type="text" style="width: 50px" id="hour" name="hour" value="<?php echo $this->schedule['hour']; ?>" /><br />
<i>This value is ignored if the schedule is set to "Hourly". If the schedule is set to "Twice Daily" or "Four Times Daily", one of the backups will start at this time, and the rest will happen at 12 or 6 hour intervals around this time.</i></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="minute">The minute to perform the backup on:</label></th>
<td><p><input type="text" style="width: 50px" id="minute" name="minute" value="<?php echo $this->schedule['minute']; ?>" /></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="email">Email scheduled backups?</label></th>
<td><p><input type="checkbox" id="email" name="email" value="1"<?php echo ($this->schedule['email'] ? ' checked="checked"' : ''); ?> /></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="email_to">Email address to send to:</label></th>
<td><p><input type="text" style="width: 250px" id="email_to" name="email_to" value="<?php echo htmlentities($this->schedule['email_to'], ENT_QUOTES); ?>" /></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="online">Send the backup to the online vault?</label></th>
<td><p><input type="checkbox" id="online" name="online" value="1"<?php echo ($this->schedule['online'] ? ' checked="checked"' : ''); ?> /></p></td>
</tr>
<tr valign="top">
<th scope="row">&nbsp;</th>
<td><p><input type="submit" value="Apply Schedule" class="button-primary" /></p></td>
</tr>
</table>
</form>
<?php
	}

	function Print_Decryption_Page()
	{
		if (function_exists('mcrypt_module_open')) {
			$has_mcrypt = true;
			$ciphers = array();
			if ($c = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_CBC, '')) {
				$ciphers[] = 'DES';
				mcrypt_module_close($c);
			}
			if ($c = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '')) {
				$ciphers[] = 'AES128';
				$ciphers[] = 'AES192';
				$ciphers[] = 'AES256';
				mcrypt_module_close($c);
			}
			$has_cipher = (count($ciphers) != 0);
		} else $has_mcrypt = false;
		if ($has_mcrypt && $has_cipher) {
?>
<form enctype="multipart/form-data" action="tools.php?page=<?php echo urlencode(WPONLINEBACKUP__FILE__); ?>&amp;decrypt" method="post">
<?php wp_nonce_field('decryptbackup', 'decryptbackupnonce', false); ?>
<table class="form-table">
<tr valign="top">
<th scope="row"><label for="file">Encrypted backup file:</label></th>
<td><p><input type="file" style="width: 250px" id="file" name="file" /><br />
<i>The maximum upload size your web server is configured to allow is <?php echo $this->Fix_B($this->Max_Upload_Size()); ?>. If your backup is larger than this, you should contact your host and ask for this to be increased, as the server will most likely reject the file after upload completes.</i></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="encryption_type">Encryption:</label></th>
<td><p><select name="encryption_type" id="encryption_type">
<?php
			foreach ($ciphers as $c) {
?>
	<option value="<?php echo htmlentities($c, ENT_QUOTES); ?>"><?php echo $c; ?></option>
<?php
			}
?>
</select><br />
<i>This is the encryption method you configured.<br />
If the encryption type used to encrypt your backup is not listed here, then your PHP installation may have missing mcrypt libraries. For DES, the MCRYPT_DES library is required, and for AES128/192/256, the MCRYPT_RIJNDAEL_128 library.</i></p></td>
</tr>
<tr valign="top">
<th scope="row"><label for="encryption_key">Encryption key:</label></th>
<td><p><input type="text" style="width: 250px" id="encryption_key" name="encryption_key" value="" /><br />
<i>This is the key you configured. If you have lost the encryption key, you cannot decrypt the backup, and you will be unable to access the backup data.</i></p></td>
</tr>
<tr valign="top">
<th scope="row">&nbsp;</th>
<td><p><input type="submit" value="Decrypt Backup" class="button-primary" /></p></td>
</tr>
</table>
</form>
<?php
		} else {
			if ($has_mcrypt) {
?>
<i>There are no compatible ciphers in your PHP installation. If you wish to enable decryption, please install one of the following libmcrypt ciphers: MCRYPT_DES (for DES) or MCRYPT_RIJNDAEL128 (for AES128/192/256).</i>
<?php
			} else  {
?>
<i>The libmcrypt extension (php-mcrypt) was not found in your PHP installation. Please contact your host or install it yourself if you wish to enable decryption.</i>
<?php
			}
		}
	}

	function Format_Status()
	{
//Get the last backup status.
		$status = $this->Fetch_Backup_Status();

		if (is_null($status['last_start'])) {

			$last_backup = 'Never';
			$last_img = '';
			$last_bg = '';
			$last_result = '<i>N/A</i>';

		} else {

			$last_backup = date('d-m-Y H.i', $status['last_start']) . (is_null($status['last_end']) ? '' : ' (Completed in ' . $this->Fix_Time($status['last_end'] - $status['last_start']) . '.)');

			if ($status['last_comp']['status'] !== true) {

				$last_img = 'exclamation';
				$last_bg = 'tbgred';
				$last_result = htmlentities($status['last_comp']['status'], ENT_QUOTES);

			} else {

				if ($status['last_comp']['major']) {

					$last_img = 'error';
					$last_bg = 'tbgyel';

					if ($status['last_comp']['minor']) {
						$last_result = 'Completed partially with errors (' . $status['last_comp']['major'] . ' major, ' . $status['last_comp']['minor'] . ' minor.)';
					} else {
						$last_result = 'Completed partially with ' . $status['last_comp']['major'] . ' major error' . ($status['last_comp']['major'] == 1 ? '' : 's') . '.';
					}

				} else {

					$last_img = 'accept';
					$last_bg = 'tbggre';

					if ($status['last_comp']['minor']) {
						$last_result = 'Completed successfully with ' . $status['last_comp']['minor'] . ' minor error' . ($status['last_comp']['minor'] == 1 ? '' : 's') . '.';
					} else {
						$last_result = 'Completed successfully.';
					}

				}

			}

		}

		return compact('last_backup', 'last_img', 'last_bg', 'last_result');
	}

	function Print_Log_Page()
	{
		$status = $this->Fetch_Backup_Status();
		$overview_status = $this->Format_Status($status);
?>
<p>
	<span style="display: inline-block; width: 180px"><b>Last Backup</b></span> <?php echo $overview_status['last_backup']; ?><br />
	<span style="display: inline-block; width: 180px"><b>Last Result</b></span> <span<?php if ($overview_status['last_bg']) { ?> style="background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/<?php echo $overview_status['last_bg']; ?>.png')"<?php } ?>><?php if ($overview_status['last_img']) { ?><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/<?php echo $overview_status['last_img']; ?>.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;<?php } ?><?php echo $overview_status['last_result']; ?></span>
</p>
<p>
	<b>Backup Log:</b>
</p>
<p>
<?php echo str_replace(NL, '<br />' . NL, htmlentities($status['last_log'], ENT_QUOTES)); ?>
</p>
<form action="tools.php" method="get">
<input type="hidden" name="page" value="<?php echo htmlentities(WPONLINEBACKUP__FILE__, ENT_QUOTES); ?>" />
<p style="float: left">
	<input type="submit" value="Return" class="button-primary" id="wponlinebackup_return" />
</p>
</form>
<div style="clear: left"></div>
<?php
	}

	function Print_Overview_Page()
	{
		$status = $this->Fetch_Backup_Status();
		$overview_status = $this->Format_Status($status);

//Get schedule information.
		if ($this->schedule['schedule'] == '' || !array_key_exists($this->schedule['schedule'], $this->schedule_list)) $scheduled = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/exclamation.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A00">No</b> Click \'Change Schedule\' to configure.';
		else {

			$now = time();
			$next_string = date('d-m-Y H.i', $this->schedule['next_trigger']);
			if ($status['status'] == 1) {
				$scheduled = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/cog.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #0A0">Yes</b> <b>A scheduled backup is current running.</b>';
			} else if ($this->schedule['next_trigger'] <= $now) {
				$scheduled = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/cog.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #0A0">Yes</b> The backup is about to start...';
			} else if ($this->schedule['next_trigger'] <= $now - 3600) {
				$scheduled = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/error.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A80">Problem</b> The backup schedule is active and should have been triggered over an hour ago at ' . $next_string.  '. Please ensure your WordPress installation is configured correctly and that the built-in cron system is functioning.';
			} else {
				$scheduled = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/accept.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #0A0">Yes</b> ' . $this->schedule_list[$this->schedule['schedule']] . ' - The next backup will be at ' . $next_string . '.';
			}

		}

//Check compression settings...
		if (function_exists('gzopen')) $compression = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/accept.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #0A0">Yes</b> Backup sizes will be significantly reduced.';
		else $compression = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/exclamation.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A00">No</b> The current PHP installation does not have ZLib enabled. We highly recommend you get this enabled as it will greatly reduce the size of your backups. Contact your host, download a PHP distrubution with ZLib enabled, or recompile PHP yourself with the \'--with-zlib\' option to enable ZLib.';

//Check encryption settings...
		if (function_exists('mcrypt_module_open')) {

			$has_mcrypt = true;
			$ciphers = array();

			if ($c = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_CBC, '')) {
				$ciphers[] = 'DES';
				mcrypt_module_close($c);
			}

			if ($c = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '')) {
				$ciphers[] = 'AES128';
				$ciphers[] = 'AES192';
				$ciphers[] = 'AES256';
				mcrypt_module_close($c);
			}

			if (count($ciphers) != 0) {
				if (!in_array($this->settings['encryption_type'], $ciphers)) $encryption = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/exclamation.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A00">No</b> Click \'Change Settings\' to configure.';
				else $encryption = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/accept.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #0A0">Yes</b> Backups will be encrypted with ' . $this->settings['encryption_type'] . '.';
			} else $encryption = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/exclamation.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A00">No</b> There are no compatible ciphers in your PHP installation. If you wish to enable encryption (which we highly recommend if you are sending backups to our online vault), please install one of the following libmcrypt ciphers: MCRYPT_DES (suitable) or MCRYPT_RIJNDAEL128 (recommended).';

		} else $encryption = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/exclamation.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A00">No</b> The libmcrypt extension (php-mcrypt) was not found in your PHP installation. Please contact your host or install it yourself if you wish to enable encryption (which we highly recommend if you are sending backups to our online vault).';

//Check if online backup is scheduled and configured correctly...
		if ($this->schedule['online']) {

			if ($this->settings['username'] == '') $online = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/error.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A80">Problem</b> No username has been specified. Click \'Change Settings\' to configure.';
			else $online = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/accept.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #0A0">Yes</b> Online Backup for WordPress Username: ' . $this->settings['username'];

		} else $online = '<img src="' . WPONLINEBACKUP__HURL__ . '/images/exclamation.png" alt="" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" />&nbsp;<b style="display: inline-block; width: 60px; color: #A00">No</b> Click \'Change Schedule\' to enable online submission during scheduled backups.';
?>
<p style="float: right; margin: 0; width: 200px"><a href="http://www.backup-technology.com/online-backup-for-wordpress/"><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/logo.jpg" alt="Backup Technology" style="border: 0; width: 195px; height: 55px" /></a><br />Check out the <a href="https://wordpress.backup-technology.com/FAQ" title="Online Backup for WordPress FAQ" onclick="window.open(this.href);return false;">FAQ</a> for solutions to common problems and information about restoring backup files.</p>
<p style="margin-right: 200px">
	<span style="display: inline-block; width: 180px"><b>Last Backup</b></span> <?php echo $overview_status['last_backup']; ?><br />
	<span style="display: inline-block; width: 180px"><b>Last Result</b></span> <span<?php if ($overview_status['last_bg']) { ?> style="background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/<?php echo $overview_status['last_bg']; ?>.png')"<?php } ?>><?php if ($overview_status['last_img']) { ?><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/<?php echo $overview_status['last_img']; ?>.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;<?php } ?><?php echo $overview_status['last_result']; ?></span><?php if (!is_null($status['last_start'])) { ?> <a href="tools.php?page=<?php echo urlencode(WPONLINEBACKUP__FILE__); ?>&amp;log">(View Log)</a><?php } ?>
</p>
<p style="margin-right: 200px">
	<span style="display: inline-block; width: 180px"><b>Scheduled?</b></span> <?php echo $scheduled; ?><br />
	<span style="display: inline-block; width: 180px"><b>Compression enabled?</b></span> <?php echo $compression; ?><br />
	<span style="display: inline-block; width: 180px"><b>Encryption enabled?</b></span> <?php echo $encryption; ?>
</p>
<p style="margin-right: 200px">
	<span style="display: inline-block; width: 180px"><b>Online backup enabled?</b></span> <span id="wponlinebackup_serverstatus"><?php echo $online; ?></span>
</p>
<div id="wponlinebackup_serverinfo"></div>
<form action="tools.php" method="get">
<input type="hidden" name="page" value="<?php echo htmlentities(WPONLINEBACKUP__FILE__, ENT_QUOTES); ?>" />
<p><input type="submit" name="settings" value="Change Settings" class="button-primary" /> <input type="submit" name="schedule" value="Change Schedule" class="button-primary" /> <input type="submit" name="decrypt" value="Decrypt a Backup" class="button-primary" /> <input type="submit" value="Refresh" class="button-primary" /></p>
</form>
<div style="clear: right"></div>
<?php
	}

	function Print_Backup_Page()
	{
		$now = time();
		$status = $this->Fetch_Backup_Status();
		if ($status['status'] <= 0 || $status['time'] <= $now - DUMP_TIME_OUT) {
			if (array_key_exists('online_nonce', $status['progress']) && $status['progress']['online_nonce'] != '') {
?>
<p><span style="background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/tbgyel.png')"><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/error.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;<b>WARNING:</b> There is still a backup waiting to be retrieved by the online vault! Starting a new backup now will remove this backup and the online vault will fail to retrieve it.</span></p>
<?php
			}
		} else {
?>
<p><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/cog.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;There is a backup currently running... You will be unable to start a new backup until it completes. (Started <?php echo date('d-m-Y H.i.s', $status['progress']['start']); ?>. Elapsed time <?php echo $this->Fix_Time($now - $status['progress']['start']); ?>.)</p>
<?php
			return;
		}
?>
<form action="tools.php?page=<?php echo urlencode(WPONLINEBACKUP__FILE__); ?>" method="post" onsubmit="wponlinebackup_checkajax();">
<?php wp_nonce_field('startbackup', 'startbackupnonce', false); ?>
<input type="hidden" name="isajax" value="no" id="wponlinebackup_isajax" />
<table class="form-table">
<tr valign="top">
<th scope="row">Select backup targets:</th>
<td>
	<input type="checkbox" name="transmit_targets[]" value="email" id="transmit_email" /> <label for="transmit_email">Email as an attachment to: </label><br />
		<span style="width: 100px; display: inline-block">&nbsp;</span><input type="text" name="transmit_email_to" value="" /><br />
	<input type="checkbox" name="transmit_targets[]" value="download" id="transmit_download" /> <label for="transmit_download">Download to your computer</label><br />
	<input type="checkbox" name="transmit_targets[]" value="online" id="transmit_online" checked="checked" /> <label for="transmit_online">Send to the online backup vault</label>
</td>
</tr>
<tr valign="top">
<th scope="row">&nbsp;</th>
<td><input type="submit" value="Start Manual Backup" class="button-primary" /></td>
</tr>
</table>
</form>
<?php
	}

	function Generate_Messages($messages)
	{
		$html = '';
		foreach ($messages as $item) {
			list ($img, $text) = $item;
			switch ($img) {
				default:
					$img = 'exclamation';
					break;
				case 'Warning':
					$img = 'error';
					break;
				case 'Information':
					$img = 'accept';
					break;
			}
			if ($html) $html .= '<br />' . NL;
			$html .= '<img src="' . WPONLINEBACKUP__HURL__ . '/images/' . $img . '.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;' . preg_replace('/(^|[\\s.?,;:\'"]+)FAQ([\\s.?,;:\'"]+|$)/', '\\1<a href="https://wordpress.backup-technology.com/FAQ" title="Online Backup for WordPress FAQ" onclick="window.open(this.href);return false;">FAQ</a>\\2', htmlentities($text, ENT_QUOTES));
		}
		return $html;
	}

	function Header_Progress_Page()
	{
?>
<meta http-equiv="refresh" content="<?php echo floor(PROGRESS_REFRESH_RATE / 1000); ?>; url=<?php echo WPONLINEBACKUP__TOOLS_URL__; ?>?page=<?php echo htmlentities(WPONLINEBACKUP__FILE__, ENT_QUOTES); ?>&amp;continuebackupnonce=<?php echo htmlentities($this->do_timeout, ENT_QUOTES); ?>" />
<?php
	}

	function Print_Progress_Page()
	{
		$status = $this->Fetch_Backup_Status();
		$result = $this->Fetch_Progress($status);
		if ($result['progressbg'] != '') $result['progressbg'] = ' style="background-image: url(\'' . WPONLINEBACKUP__HURL__ . '/images/' . $result['progressbg'] . '.png\')"';
?>
<p id="wponlinebackup_warning"<?php if ($result['completed']) { ?> style="display: none"<?php } ?>>
	<span style="background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/tbgyel.png')"><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/error.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;WARNING! Do NOT move away from this page or hit the refresh button until the backup completes as this will cause the backup to fail!</span>
</p>
<p>
	<span style="display: inline-block; width: 180px"><b>Backup Progress:</b></span> <span id="wponlinebackup_progressbg"<?php echo $result['progressbg']; ?>><img id="wponlinebackup_progressimg" src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/<?php echo $result['progressimg']; ?>.png" style="width: 16px; height: 16px; vertical-align: middle; position: relative; top: -1px" alt="" />&nbsp;<span id="wponlinebackup_progresstext"><?php echo htmlentities($result['progresstext'], ENT_QUOTES); ?></span></span>
</p>
<div style="margin: 8px 0; text-align: center">
<div style="margin: 0 auto; text-align: left; width: 90%; height: 20px; background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/progressctile.gif'); background-repeat: repeat-x; float: left; margin-right: 10px">
<div style="height: 20px; background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/progresscl.gif'); background-repeat: no-repeat">
<div style="height: 20px; background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/progresscr.gif'); background-repeat: no-repeat; background-position: top right; padding: 1px"><div>
<div id="wponlinebackup_bar" style="margin-right: auto; width: <?php echo $result['total_percent']; ?>%; height: 18px; background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/progresshead.gif'); background-repeat: no-repeat; background-position: top right; overflow-x: hidden">
<div style="height: 18px; background-image: url('<?php echo WPONLINEBACKUP__HURL__; ?>/images/progresstile.gif'); background-repeat: repeat-x; background-position: top right; margin-right: 3px">
<div style="width: 7px; height: 18px"><img src="<?php echo WPONLINEBACKUP__HURL__; ?>/images/progressbase.gif" style="width: 3px; height: 18px" alt="" /></div>
</div>
</div>
</div></div>
</div>
</div>
<p style="margin: 0; font-weight: bold; font-size: 15px"><span id="wponlinebackup_percent"><?php echo $result['total_percent']; ?></span>%</p>
</div>
<div style="clear: left"></div>
<p id="wponlinebackup_messages"<?php if (count($result['messages']) == 0) { ?> style="display: none"<?php } ?>>
<?php
			if (count($result['messages'])) echo $this->Generate_Messages($result['messages']);
?>
</p>
<div id="wponlinebackup_log"<?php if (!$result['completed']) { ?> style="display: none"<?php } ?>>
<p>
	<b>Backup Log:</b>
</p>
<p id="wponlinebackup_logtext">
<?php if ($result['completed']) echo str_replace(NL, '<br />' . NL, htmlentities($this->Generate_Log($status['progress']), ENT_QUOTES)); ?>
</p>
</div>
<div id="wponlinebackup_downloadbtn"<?php if ($result['download_link'] == '') { ?> style="display: none"<?php } ?>>
<form action="<?php echo WPOnlineBackup_Fix_HTTPS(get_bloginfo('wpurl')); ?>" method="get">
<input type="hidden" name="which" value="download" />
<input id="wponlinebackup_download_link" type="hidden" name="wponlinebackup_fetch" value="<?php if ($result['download_link']) echo htmlentities($result['download_link'], ENT_QUOTES); ?>" />
<p style="float: left; margin-right: 10px">
	<input type="submit" value="Download Backup" class="button-primary" />
</p>
</form>
</div>
<div id="wponlinebackup_returnbtn"<?php if (!$result['completed']) { ?> style="display: none"<?php } ?>>
<form action="tools.php" method="get">
<input type="hidden" name="page" value="<?php echo htmlentities(WPONLINEBACKUP__FILE__, ENT_QUOTES); ?>" />
<p style="float: left">
	<input type="submit" value="Return" class="button-primary" id="wponlinebackup_return" />
</p>
</form>
</div>
<div style="clear: left"></div>
<?php
	}

//===== AJAX functions
//==================================================

	function jsize($string)
	{
		$string = preg_replace('/([\'\\\\])/', '\\\\\\1', implode("\n", str_split($string, 250)));
		$string = preg_replace('/(\\r\\n?|\\n)/', '\' +\\1\'', $string);
		return preg_replace('/<\\/script>/', '<\' + \'/script>', $string);
	}

	function AJAX_Progress()
	{
		if (!current_user_can(10)) $this->die_text('0');

		$url = $this->jsize(WPONLINEBACKUP__URL__);

		$status = $this->Fetch_Backup_Status();
		$result = $this->Fetch_Progress($status);

		if ($result['completed']) {
?>
Get_Element('wponlinebackup_warning').Set_Style('display', 'none');
Get_Element('wponlinebackup_log').Set_Style('display', 'block');
Get_Element('wponlinebackup_logtext').innerHTML = '<?php echo $this->jsize(str_replace(NL, '<br />' . NL, htmlentities($this->Generate_Log($status['progress']), ENT_QUOTES))); ?>';
Get_Element('wponlinebackup_returnbtn').Set_Style('display', 'block');
<?php
		}
		if ($result['download_link']) {
?>
Get_Element('wponlinebackup_downloadbtn').Set_Style('display', 'block');
Get_Element('wponlinebackup_download_link').value = '<?php echo $result['download_link']; ?>';
<?php
		}
		if (count($result['messages'])) {
?>
Get_Element('wponlinebackup_messages').innerHTML = '<?php echo $this->jsize($this->Generate_Messages($result['messages'])); ?>';
Get_Element('wponlinebackup_messages').Set_Style('display', 'block');
<?php
		}
?>
Get_Element('wponlinebackup_progressbg').Set_Style('backgroundImage', 'url(\'<?php echo $url . '/images/' . $result['progressbg'] . '.png'; ?>\')');
Get_Element('wponlinebackup_progressimg').src = '<?php echo $url . '/images/' . $result['progressimg'] . '.png'; ?>';
Get_Element('wponlinebackup_progresstext').Set_Text('<?php echo $this->jsize($result['progresstext']); ?>');
Get_Element('wponlinebackup_bar').Set_Style('width', '<?php echo $result['total_percent']; ?>%');
Get_Element('wponlinebackup_percent').Set_Text('<?php echo $result['total_percent']; ?>');
<?php
		if ($this->do_timeout) {
?>
wponlinebackup_vars.nonce = '<?php echo $this->do_timeout; ?>';
window.setTimeout(wponlinebackup_progress, <?php echo PROGRESS_REFRESH_RATE; ?>);

<?php
		}

		exit;
	}

//===== Progress formatting functions
//==================================================

	function Fetch_Progress($status)
	{
		$completed = false;
		if ($status['status'] == -1) {
			$completed = true;
			$waiting = 'Aborted';
			$progressimg = 'exclamation';
			$progressbg = 'tbgred';
			$progresstext = 'Failed - ' . $status['progress']['error'];
		} else if ($status['status'] == -2) {
			$waiting = '';
			$progressimg = 'cog';
			$progressbg = '';
			$progresstext = 'About to start backup...';
		} else if ($status['status'] == 0) {
			$completed = true;
			$waiting = 'Aborted';
			$progresstext = true;
		} else {
			$waiting = '';
			$progressimg = 'cog';
			$progressbg = '';
			$progresstext = false;
		}
		$messages = array();
		$major = 0;
		$minor = 0;
		$total_jobs = count($status['progress']['job_list']);
		$done_jobs = 0;
		$percent = 0;
		foreach ($status['progress']['job_list'] as $job) {
			switch ($job['process']) {
				default:
				case 'table':
					foreach ($job['messages'] as $text) {
						if ($text[0] == 'Error') $major++;
						else if ($text[0] == 'Warning') $minor++;
						$text[1] = 'Table ' . $job['table'] . ': ' . $text[1];
						$messages[] = $text;
					}
					if (is_null($job['total'])) {
						if ($progresstext === false) {
							$progresstext = 'Processing table ' . $job['table'];
							if ($waiting == '') break 2;
						}
					} else if ($job['done'] !== true) {
						$percent = ($job['done'] * 100) / $job['total'];
						$job_percent = number_format($percent, 2);
						$progresstext = "Processing table {$job['table']} - {$job['done']} of ~{$job['total']} row" . ($job['total'] == 1 ? '' : 's') . " ({$job_percent}%)";
						if ($waiting == '') break 2;
					} else {
						$done_jobs++;
					}
					break;
				case 'compress':
					foreach ($job['messages'] as $text) {
						if ($text[0] == 'Error') $major++;
						else if ($text[0] == 'Warning') $minor++;
						$text[1] = 'Table ' . $job['table'] . ': ' . $text[1];
						$messages[] = $text;
					}
					if (is_null($job['done'])) {
						if ($progresstext === false) {
							$progresstext = 'Initializing compression...';
							if ($waiting == '') break 2;
						}
					} else {
						$done_jobs++;
					}
					break;
				case 'encrypt':
					foreach ($job['messages'] as $text) {
						if ($text[0] == 'Error') $major++;
						else if ($text[0] == 'Warning') $minor++;
						$text[1] = 'Encryption: ' . $text[1];
						$messages[] = $text;
					}
					if (is_null($job['done'])) {
						if ($progresstext === false) {
							$progresstext = 'Initializing encryption...';
							if ($waiting == '') break 2;
						}
					} else {
						$done_jobs++;
					}
					break;
				case 'transmit':
					foreach ($job['messages'] as $text) {
						if ($text[0] == 'Error') $major++;
						else if ($text[0] == 'Warning') $minor++;
						$text[1] = 'Transmission: ' . $text[1];
						$messages[] = $text;
					}
					if (is_null($job['done'])) {
						if ($progresstext === false) {
							$progresstext = 'Initializing online transmission...';
							if ($waiting == '') break 2;
						}
					} else {
						$done_jobs++;
					}
					break;
				case 'email':
					foreach ($job['messages'] as $text) {
						if ($text[0] == 'Error') $major++;
						else if ($text[0] == 'Warning') $minor++;
						$text[1] = 'Email: ' . $text[1];
						$messages[] = $text;
					}
					if (is_null($job['done'])) {
						if ($progresstext === false) {
							$progresstext = 'Initializing email...';
							if ($waiting == '') break 2;
						}
					} else {
						$done_jobs++;
					}
					break;
			}
		}
		$download_link = '';
		if ($progresstext === false) {
			$progresstext = 'Completing...';
		} else if ($progresstext === true) {
			if ($major) {
				$progressimg = 'error';
				$progressbg = 'tbgyel';
				if ($minor) {
					$progresstext = 'Completed partially with errors (' . $major . ' major, ' . $minor . ' minor.)';
				} else {
					$progresstext = 'Completed partially with ' . $major . ' major error' . ($major == 1 ? '' : 's') . '.';
				}
			} else {
				$progressimg = 'accept';
				$progressbg = 'tbggre';
				if ($minor) {
					$progresstext = 'Completed successfully with ' . $minor . ' minor error' . ($minor == 1 ? '' : 's') . '.';
				} else {
					$progresstext = 'Completed successfully.';
				}
			}
			$progresstext .= ' (Ran for ' . $this->Fix_Time($status['progress']['end'] - $status['progress']['start'], true) . ')';
			if (array_key_exists('download', $status['progress']['output_methods'])) {
				$download_link = $status['progress']['download_nonce'];
			}
		}
		if ($done_jobs == $total_jobs) {
			$total_percent = '100';
		} else {
			$total_percent = ($done_jobs * 100) / $total_jobs;
			$percent_after = (($done_jobs + 1) * 100) / $total_jobs;
			$total_percent += (($percent_after - $total_percent) * $percent) / 100;
			$total_percent = number_format($total_percent, 0);
		}
		return compact('completed', 'progressimg', 'progressbg', 'progresstext', 'download_link', 'total_percent', 'messages');
	}

	function Generate_Log($progress, $omit_outputs = false)
	{
		$message = array();
		foreach ($progress['job_list'] as $key => $_job2) {
			$job2 = & $progress['job_list'][$key];
			switch ($job2['process']) {
				case 'table':
				default:
					foreach ($job2['messages'] as $text) {
						$message[] = 'Table ' . $job2['table'] . ': [' . $text[0] . '] ' . $text[1];
					}
					$message[] = 'Table ' . $job2['table'] . ': ' . $job2['total'] . ' row' . ($job2['total'] == 1 ? '' : 's');
					break;
				case 'compress':
					$s = true;
					foreach ($job2['messages'] as $text) {
						if ($text[0] == 'Error') $s = false;
						$message[] = 'Compression: [' . $text[0] . '] ' . $text[1];
					}
					if ($job2['done'] === false) $message[] = 'Compression: Skipped';
					else if ($s) $message[] = 'Compression: Successful';
					break;
				case 'encrypt':
					$s = true;
					foreach ($job2['messages'] as $text) {
						if ($text[0] == 'Error') $s = false;
						$message[] = 'Encryption: [' . $text[0] . '] ' . $text[1];
					}
					if ($job2['done'] === false) $message[] = 'Encryption: Skipped';
					else if ($s) $message[] = 'Encryption: Successful';
					break;
				case 'transmit':
					if ($omit_outputs) continue;
					$s = true;
					foreach ($job2['messages'] as $text) {
						if ($text[0] == 'Error') $s = false;
						$message[] = 'Transmission: [' . $text[0] . '] ' . $text[1];
					}
					if ($job2['done'] === false) $message[] = 'Transmission: Skipped';
					else if ($s) $message[] = 'Transmission: Successful';
					break;
				case 'email':
					if ($omit_outputs) continue;
					$s = true;
					foreach ($job2['messages'] as $text) {
						if ($text[0] == 'Error') $s = false;
						$message[] = 'Email: [' . $text[0] . '] ' . $text[1];
					}
					if ($job2['done'] === false) $message[] = 'Email: Skipped';
					else if ($s) $message[] = 'Email: Successful';
					break;
			}
		}
		return implode("\t".NL, $message);
	}

	function Fetch_Completion($status)
	{
		$minor = 0;
		$major = 0;
		if ($status['status'] == -1) {
			$comp = 'Failed - ' . $status['progress']['error'];
		} else {
			$comp = true;
			foreach ($status['progress']['job_list'] as $key => $_job2) {
				$job2 = & $status['progress']['job_list'][$key];
				switch ($job2['process']) {
					case 'table':
					default:
						foreach ($job2['messages'] as $text) {
							if ($text[0] == 'Error') $major++;
							else if ($text[0] == 'Warning') $minor++;
						}
						break;
					case 'compress':
						foreach ($job2['messages'] as $text) {
							if ($text[0] == 'Error') $major++;
							else if ($text[0] == 'Warning') $minor++;
						}
						break;
					case 'encrypt':
						foreach ($job2['messages'] as $text) {
							if ($text[0] == 'Error') $major++;
							else if ($text[0] == 'Warning') $minor++;
						}
						break;
					case 'transmit':
						foreach ($job2['messages'] as $text) {
							if ($text[0] == 'Error') $major++;
							else if ($text[0] == 'Warning') $minor++;
						}
						break;
					case 'email':
						foreach ($job2['messages'] as $text) {
							if ($text[0] == 'Error') $major++;
							else if ($text[0] == 'Warning') $minor++;
						}
						break;
				}
			}
		}
		return array('status' => $comp, 'minor' => $minor, 'major' => $major);
	}

//===== Backup file retrieval (Download to computer)
//==================================================

	function Retrieve_Backup()
	{
		$cnt = ob_get_level();
		while ($cnt-- > 0) ob_end_clean();

		$status = $this->Fetch_Backup_Status();

		if (!array_key_exists('completed', $status['progress']) || !$status['progress']['completed']) $this->die_text("\x01\x02RUNNING", true);

		$which = array_key_exists('which', $_GET) ? strval($_GET['which']) : '';
		if ($which != 'online' && $which != 'download') $this->die_text("\x01\x02INVALID", true);

		if (!array_key_exists($which . '_nonce', $status['progress'])) $fail = true;
		else if (($nonce = strval($_GET['wponlinebackup_fetch'])) != $status['progress'][$which . '_nonce']) {

			if ($status['progress'][$which . '_last_failure'] != $nonce) {
				$status['progress'][$which . '_failures']++;
				$status['progress'][$which . '_last_failure'] = $nonce;

				if ($status['progress'][$which . '_failures'] > 5) {
					$status['progress'][$which . '_nonce'] = '';
					if ($status['progress']['download_nonce'] == '' && $status['progress']['online_nonce'] == '') {
						if (file_exists($status['progress']['file'])) @unlink($status['progress']['file']);
						if (file_exists($status['progress']['file'] . '.gz')) @unlink($status['progress']['file'] . '.gz');
						if (file_exists($status['progress']['file'] . '.enc')) @unlink($status['progress']['file'] . '.enc');
						if (file_exists($status['progress']['file'] . '.gz.enc')) @unlink($status['progress']['file'] . '.gz.enc');
					}
				}

				$this->Update_Backup_Mutex($status, 0);
			}

			$fail = true;

		} else $fail = false;

		if ($fail) {

			if ($which == 'online') $message = "\x01\x02INVALID";
			else $message = '';

			$message .= "The backup file requested doesn't appear to exist anymore.\nMaybe the backup file has already been requested or another backup has started and replaced it.";

			$this->die_text($message, true);

		}

		$check = ($which == 'online' && array_key_exists('check', $_GET) ? true : false);
		if ($check) {

			$compress = '0';
			$encrypt = '0';

		} else if ($which != 'online') $clean = true;
		else if (array_key_exists('clean', $_GET)) {
			$clean = true;
		} else $clean = false;

		if ($clean) {
			$status['progress'][$which . '_nonce'] = '';
			$this->Update_Backup_Mutex($status, 0);

			if ($which == 'online') {
				if ($status['progress']['download_nonce'] == '' && $status['progress']['online_nonce'] == '') {
					if (file_exists($status['progress']['file'])) @unlink($status['progress']['file']);
					if (file_exists($status['progress']['file'] . '.gz')) @unlink($status['progress']['file'] . '.gz');
					if (file_exists($status['progress']['file'] . '.enc')) @unlink($status['progress']['file'] . '.enc');
					if (file_exists($status['progress']['file'] . '.gz.enc')) @unlink($status['progress']['file'] . '.gz.enc');
				}

				$this->die_text("\x01\x01ISVALID", true);
			}
		}

		$this->Load_Settings();

		$file = $status['progress']['file'];

		$ext = '';
		foreach ($status['progress']['job_list'] as $entry) {
			if ($entry['process'] == 'compress' && $entry['done'] === true) {
				$file .= '.gz';
				$ext .= '.gz';
				if ($check) $compress = '1';
			}
			if ($entry['process'] == 'encrypt' && $entry['done'] === true) {
				$file .= '.enc';
				$ext .= '.enc';
				if ($check) $encrypt = '1';
			}
		}

		if (!($f = @fopen($file, 'r'))) {

			if ($which == 'online') $message = "\x01\x02INVALID";
			else $message = '';

			$message .= "The backup file requested was not found!\n\nThe temporary folder may have been emptied between the backup completing and the server requesting it.";

			if ($this->settings['tmp_dir'] == '/tmp/') {
				$message .= "\n\nIf this error continues to happen, try changing the temporary folder in the settings to something other than /tmp/ (which it is currently set to.)\nPlease ensure the folder you choose is not accessible on the internet though, so don't place it inside your public_html directory - or if you do, make sure you block all access to that folder using something like a '.htaccess' file - your website administrator should be able to help you with this if you need.";
			}

			$this->die_text($message, true);

		}

		if ($check) {

			fclose($f);

			$log = $this->Generate_Log($status['progress'], true);
			$this->die_text("\x01\x01ISVALID" . filesize($file) . ":{$compress}:{$encrypt}:{$log}", true);

		} else {

			if (array_key_exists('start', $_GET)) $start = intval($_GET['start']);
			else $start = 0;

			if ($start > ($filesize = @filesize($file))) {
				fclose($f);
				$this->die_text("\x01\x02INVALIDThe range of data requested does not exist.\nMaybe the backup file has been corrupted somewhere between the backup completing and the server requesting it.", true);
			}

			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=WPOnlineBackup_' . date('d-m-Y-H-i-s') . '.bak' . $ext);

			if ($which == 'online') echo "\x01\x01ISVALID";
			else header('Content-Length: ' . $filesize);

			@fseek($f, $start);
			@fpassthru($f);
			@fclose($f);

			if ($status['progress']['download_nonce'] == '' && $status['progress']['online_nonce'] == '') {
				if (file_exists($status['progress']['file'])) @unlink($status['progress']['file']);
				if (file_exists($status['progress']['file'] . '.gz')) @unlink($status['progress']['file'] . '.gz');
				if (file_exists($status['progress']['file'] . '.enc')) @unlink($status['progress']['file'] . '.enc');
				if (file_exists($status['progress']['file'] . '.gz.enc')) @unlink($status['progress']['file'] . '.gz.enc');
			}

		}

		ob_start('WPOnlineBackup_Capture_Junk');
		exit;
	}

//===== Backup preparation
//==================================================

	function Restart_Schedule($save = true)
	{
		wp_clear_scheduled_hook('WPOnlineBackup_Perform');
		if ($this->schedule['schedule'] != '' && ($this->schedule['next_trigger'] = $this->Calculate_Schedule($this->schedule)) !== false) {
			wp_schedule_single_event($this->schedule['next_trigger'], 'WPOnlineBackup_Perform');
		} else $this->schedule['next_trigger'] = null;
		if ($save) update_option('wponlinebackup_schedule', $this->schedule);
	}

	function Perform_Manual_Backup()
	{
		$now = time();
		$status = $this->Fetch_Backup_Status();

		if ($status['time'] > $now - DUMP_TIME_OUT) {
			$ret = $this->Process($status, true);
			if ($ret == 1) return 1;
		} else {
			$status['progress']['error'] = 'The backup timed out. Your server might be under some strain, try running the backup at a quieter period.';
			$ret = -1;
		}

		$now = time();
		$status['last_start'] = $status['progress']['start'];
		$status['last_end'] = $status['progress']['end'] = $now;
		$status['last_comp'] = $this->Fetch_Completion($status);
		$status['last_log'] = $this->Generate_Log($status['progress']);

		$this->Update_Backup_Mutex($status, $ret);

		return $ret;
	}

	function Perform_Scheduled_Backup()
	{
		$this->Load_Schedule();
		$this->Load_Settings();

		$output_methods = array();
		if ($this->schedule['online']) $output_methods['online'] = '1';
		if ($this->schedule['email']) $output_methods['email'] = $this->schedule['email_to'];

		$result = $this->Start_Backup($output_methods);
		if (!$result) return;

		wp_schedule_single_event(time() + 60, 'WPOnlineBackup_Perform_Check');

		$now = time();
		$status = $this->Fetch_Backup_Status();

		if ($status['time'] > $now - DUMP_TIME_OUT) {
			$ret = $this->Process($status, false);
		} else {
			$status['progress']['error'] = 'The backup timed out. Your server might be under some strain, try running the backup at a quieter period.';
			$ret = -1;
		}

		$now = time();
		$status['last_start'] = $status['progress']['start'];
		$status['last_end'] = $status['progress']['end'] = $now;
		$status['last_comp'] = $this->Fetch_Completion($status);
		$status['last_log'] = $this->Generate_Log($status['progress']);

		$this->Update_Backup_Mutex($status, $ret);

		wp_clear_scheduled_hook('WPOnlineBackup_Perform_Check');

		$this->Restart_Schedule();
		
		return $ret;
	}

	function Perform_Scheduled_Backup_Check()
	{
		wp_schedule_single_event(time() + 60, 'WPOnlineBackup_Perform_Check');

		$now = time();
		$status = $this->Fetch_Backup_Status();

		if ($status['time'] > $now - DUMP_TIME_OUT) return;
		else if ($status['time'] >= $now - SCHEDULED_TIME_OUT) {
			$status['progress']['timeouts']++;
			if ($status['progress']['timeouts'] < 5) {
				if (!$this->Update_Backup_Mutex($status, $status['status'])) return false;
				$ret = $this->Process($status, false);
			} else {
				$status['progress']['error'] = 'The backup timed out 5 times. Your server might be under some strain, try scheduling the backup for a quieter period.';
				$ret = -1;
			}
		} else {
			$status['progress']['error'] = 'The backup timed out. Your server might be under some strain, try running the backup at a quieter period.';
			$ret = -1;
		}

		$now = time();
		$status['last_start'] = $status['progress']['start'];
		$status['last_end'] = $status['progress']['end'] = $now;
		$status['last_comp'] = $this->Fetch_Completion($status);
		$status['last_log'] = $this->Generate_Log($status['progress']);

		$this->Update_Backup_Mutex($status, $ret);

		wp_clear_scheduled_hook('WPOnlineBackup_Perform_Check');

		$this->Restart_Schedule();

		return $ret;
	}

//===== The backup workhorse
//==================================================

	function Start_Backup($output_methods)
	{
		$status = $this->Fetch_Backup_Status();
		$now = time();
		if ((($status['status'] > 0 || $status['status'] == -2) && $status['time'] > $now - DUMP_TIME_OUT) || !$this->Update_Backup_Mutex($status, -2)) {
			return false;
		}
		$this->Initialize_Backup($output_methods, $status['progress']);
		$this->Update_Backup_Mutex($status, -2);
		return true;
	}

	function Initialize_Backup($output_methods, & $progress)
	{
		global $wpdb;
		if (array_key_exists('file', $progress)) {
			if (file_exists($progress['file'])) @unlink($progress['file']);
			if (file_exists($progress['file'] . '.gz')) @unlink($progress['file'] . '.gz');
			if (file_exists($progress['file'] . '.enc')) @unlink($progress['file'] . '.enc');
			if (file_exists($progress['file'] . '.gz.enc')) @unlink($progress['file'] . '.gz.enc');
		}
		$tables = $wpdb->get_results('SHOW TABLES', ARRAY_N);
		$progress = array();
		$i = 0;
		foreach ($tables as $entry) {
			$entry = $entry[0];
			if ($entry == $wpdb->prefix . 'online_backup') continue;
			else if (in_array($entry, $this->core_tables));
			else if ($this->settings['selection_method'] == 'include' && !in_array($entry, $this->settings['selection_list'])) continue;
			else if ($this->settings['selection_method'] != 'include' && in_array($entry, $this->settings['selection_list'])) continue;
			$progress[$i] = array(
				'process'	=> 'table',
				'messages'	=> array(),
				'table'		=> $entry,
				'total'		=> null,
				'done'		=> 0,
				'last_id'	=> array(),
				'primary'	=> array(),
				'fields'	=> array(),
			);
			$unique = false;
			$indexes = $wpdb->get_results('SHOW INDEXES FROM ' . $this->_backquote($entry), ARRAY_A);
			if (!is_null($indexes))
				foreach ($indexes as $index)
					if ($index['Key_name'] == 'PRIMARY') {
						$progress[$i]['primary'][$index['Seq_in_index']] = $index['Column_name'];
						$progress[$i]['last_id'][$index['Seq_in_index']] = null;
					} else if ($unique === false && $index['Non_unique'] == 0) $unique = $index['Key_name'];
			if (count($progress[$i]['primary']) == 0 && $unique)
				foreach ($indexes as $index)
					if ($index['Key_name'] == $unique) {
						$progress[$i]['primary'][$index['Seq_in_index']] = $index['Column_name'];
						$progress[$i]['last_id'][$index['Seq_in_index']] = null;
					}
			if (count($progress[$i]['primary'])) {
				ksort($progress[$i]['primary']);
				ksort($progress[$i]['last_id']);
			} else {
				$progress[$i]['messages'][] = array('Warning', 'Table has no PRIMARY or UNIQUE key! Some rows could get missed. See FAQ.');
				$progress[$i]['last_id'] = null;
			}
			$fields = $wpdb->get_results('DESCRIBE ' . $this->_backquote($entry), ARRAY_A);
			if (!is_null($fields))
				foreach ($fields as $field) {
					$progress[$i]['fields'][] = $field['Field'];
				}
			else
				unset($progress[$i]);
			$i++;
		}
		$progress[] = array(
			'process'	=> 'compress',
			'messages'	=> array(),
			'done'		=> null,
		);
		$progress[] = array(
			'process'	=> 'encrypt',
			'messages'	=> array(),
			'done'		=> null,
		);
		$progress[] = array(
			'process'	=> 'email',
			'messages'	=> array(),
			'done'		=> null,
		);
		$progress[] = array(
			'process'	=> 'transmit',
			'messages'	=> array(),
			'done'		=> null,
		);
		$progress = array(
			'counter'		=> 0,
			'timeouts'		=> 0,
			'start'			=> time(),
			'end'			=> null,
			'output_methods'	=> $output_methods,
			'job_list'		=> $progress,
			'error'			=> '',
			'download_nonce'	=> '',
			'download_failures'	=> 0,
			'download_last_failure'	=> '',
			'online_nonce'		=> '',
			'online_failures'	=> 0,
			'online_last_failure'	=> '',
			'completed'		=> false,
		);
		$progress['file_id'] = wp_hash(time() . serialize($progress), '');
		$progress['file'] = $this->settings['tmp_dir'] . 'wponlinebackup' . $progress['file_id'] . '.bak';
		$progress['file_offset'] = 0;
		return $progress;
	}

	function Process(& $status, $stepped = false)
	{
		global $wpdb;
		set_time_limit(0);
		ignore_user_abort(true);
		if ($status['progress']['file_offset'] == 0) $ret = $this->Process_File_Header($status);
		else $ret = 1;
		if ($ret == 1) {
			if ($stepped) $last = '';
			foreach ($status['progress']['job_list'] as $key => $_job) {
				$job = & $status['progress']['job_list'][$key];
				if ($job['done'] === true || $job['done'] === false) continue;
				switch ($job['process']) {
					case 'table':
					default:
						if (!($ret = $this->Process_Table($status, $job, $stepped))) break 2;
						break;
					case 'compress':
						if ($stepped && $last) return 1;
						if (!($ret = $this->Process_Compress($status, $job))) break 2;
						break;
					case 'encrypt':
						if ($stepped && $last) return 1;
						if (!($ret = $this->Process_Encrypt($status, $job))) break 2;
						break;
					case 'email':
						if ($stepped && $last) return 1;
						if (!($ret = $this->Process_Email($status, $job))) break 2;
						break;
					case 'transmit':
						if ($stepped && $last) return 1;
						if (!($ret = $this->Process_Transmit($status, $job))) break 2;
						break;
				}
				if ($ret === 'next') return 1;
				if ($stepped) $last = $job['process'];
			}
		}
		$status['progress']['completed'] = true;
		if ($ret === 'next' || $ret == 1) $ret = 0;
		if ($ret == -2) {
			$ret = -1;
			$status['progress']['error'] = 'Failed.';
		}
		if (array_key_exists('download', $status['progress']['output_methods']) && $ret != -1) {
			$status['progress']['download_nonce'] = wp_hash(time() . serialize($status['progress']) . 'download', '');
		} else if ($status['progress']['error'] != '' || ($status['progress']['download_nonce'] == '' && $status['progress']['online_nonce'] == '')) {
			if (file_exists($status['progress']['file'])) @unlink($status['progress']['file']);
			if (file_exists($status['progress']['file'] . '.gz')) @unlink($status['progress']['file'] . '.gz');
			if (file_exists($status['progress']['file'] . '.enc')) @unlink($status['progress']['file'] . '.enc');
			if (file_exists($status['progress']['file'] . '.gz.enc')) @unlink($status['progress']['file'] . '.gz.enc');
		}
		return $ret;
	}

	function Process_File_Header(& $status)
	{
		@trigger_error('');
		$f = @fopen($status['progress']['file'], 'a');
		if ($f === false) {
			if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
				$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
			} else $uid = '.';
			$error = error_get_last();
			if ($error['message'] == '') $error['message'] = 'Unknown';
			$status['progress']['error'] = 'An error occurred trying to open the temporary file used to store the backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		@chmod($status['progress']['file'], 0600);
		@ftruncate($f, 0);
		@fseek($f, 0);
		$version = WPONLINEBACKUP__VERSION__;
		$wpurl = get_bloginfo('wpurl');
		$time = date('d-m-Y H.i.s T');
		$dump = <<<DUMP
-- Online Backup for WordPress
-- Version {$version}
-- http://www.backup-technology.com/online-backup-for-wordpress/
--
-- Blog: {$wpurl}
-- Generation Time: {$time}

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


DUMP;
		@fwrite($f, $dump);
		@fclose($f);
		$status['progress']['file_offset'] += strlen($dump);
		if (!$this->Update_Backup_Mutex($status, 1)) return -2;
		return 1;
	}

	function Process_Table(& $status, & $table, $stepped)
	{
		global $wpdb;
		$started = time();
		while ($table['done'] !== true) {
			if (count($table['primary'])) {
				$extra = ' ORDER BY ' . $this->_implode_backquote(' ASC, ', $table['primary']) . ' ASC';
				if (!is_null($table['total'])) {
					$where = array();
					$previous = array();
					foreach ($table['primary'] as $index => $column) {
						if (count($previous)) $where[] = '(' . implode(' AND ', $previous) . ' AND ' . $this->_backquote($column) . ' > \'' . $table['last_id'][$index] . '\')';
						else $where[] = $this->_backquote($column) . ' > \'' . $table['last_id'][$index] . '\'';
						$previous[] = $this->_backquote($column) . ' = \'' . $table['last_id'][$index] . '\'';
					}
					$where = ' WHERE ' . implode(' OR ', $where);
				} else $where = '';
				$start = '';
			} else {
				$extra = '';
				$where = '';
				if (!is_null($table['total'])) {
					$start = $table['done'] . ', ';
				} else $start = '';
			}
			$dump = '';
			if (is_null($table['total'])) {
				$wpdb->query('SET sql_quote_show_create = 1');
				$dump = $wpdb->get_var('SHOW CREATE TABLE ' . $this->_backquote($table['table']), 1) . ';' . NL . NL;
				if ($dump === false) {
					$table['messages'][] = array('Error', 'Failed to dump table layout: ' . $wpdb->last_error);
					$table['total'] = 0;
					$table['done'] = true;
					if (!$this->Update_Backup_Mutex($status, 1)) return -2;
					break;
				}
				$table['total'] = $wpdb->get_var('SELECT COUNT(*) FROM ' . $this->_backquote($table['table']));
				if (!$stepped && time() - $started > DUMP_GRACE_PERIOD) return 'next';
				if ($table['total'] === false) {
					$table['messages'][] = array('Error', 'Failed to count number of rows: ' . $wpdb->last_error);
					$table['total'] = 0;
					$table['done'] = true;
					if (!$this->Update_Backup_Mutex($status, 1)) return -2;
					break;
				}
			}
			$fields = $this->_implode_backquote(', ', $table['fields']);
			$result = $wpdb->get_results('SELECT ' . $fields . ' FROM ' . $this->_backquote($table['table']) . $where . $extra . ' LIMIT ' . $start . DUMP_SEGMENT_SIZE, ARRAY_N);
			if (!$stepped && time() - $started > DUMP_GRACE_PERIOD) return 'next';
			if ($results === false) {
				$table['messages'][] = array('exclamation', 'Failed to retrieve rows: ' . $wpdb->last_error);
				$table['total'] = 0;
				$table['done'] = true;
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				break;
			}
			if (count($result) == 0) {
				$table['total'] = $table['done'];
				$table['done'] = true;
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				break;
			}
			$insert = array();
			foreach ($result as $row) {
				$values = array();
				foreach ($row as $index => $value) {
					if (is_null($value)) $value = 'NULL';
					else if (is_numeric($value)) ;
					else $value = $this->_escape_string($value);
					$values[] = $value;
				}
				$insert[] = '(' . implode(', ', $values) . ')';
			}
			$insert = NL . implode(',' . NL, $insert);
			$table['done'] += count($result);
			if (count($table['primary'])) {
				foreach ($table['primary'] as $index => $column) {
					$table['last_id'][$index] = $row[array_search($column, $table['fields'])];
				}
			}
			$bq_table = $this->_backquote($table['table']);
			$dump .= 'INSERT INTO ' . $bq_table . ' (' . $fields . ') VALUES' . $insert . ';' . NL . NL;
			@trigger_error('');
			$f = @fopen($status['progress']['file'], 'a');
			if ($f === false) {
				if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
					$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
				} else $uid = '.';
				$error = error_get_last();
				if ($error['message'] == '') $error['message'] = 'Unknown';
				$status['progress']['error'] = 'An error occurred trying to open the temporary file used to store the backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				return -1;
			}
			@chmod($status['progress']['file'], 0600);
			@ftruncate($f, $status['progress']['file_offset']);
			@fseek($f, $status['progress']['file_offset']);
			@fwrite($f, $dump);
			@fclose($f);
			$status['progress']['file_offset'] += strlen($dump);
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			if ($stepped) {
				if (time() - $started > STEPPED_INTERVAL) return 'next';
			} else $started = time();
		}
		return 1;
	}

	function Process_Compress(& $status, & $job)
	{
		if (!function_exists('gzopen')) {
			$job['done'] = false;
			$job['messages'][] = array('Warning', 'The \'gzopen\' function is not defined. You probably don\'t have the php-gzip extension installed.');
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return 1;
		}
		$job['done'] = 0;
		if (!$this->Update_Backup_Mutex($status, 1)) return -2;
		@trigger_error('');
		$total = @filesize($status['progress']['file']);
		if ($total === false) {
			if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
				$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
			} else $uid = '.';
			$error = error_get_last();
			if ($error['message'] == '') $error['message'] = 'Unknown';
			$status['progress']['error'] = 'An error occurred trying to read the size of the temporary file used to store the backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		@trigger_error('');
		$f = @fopen($status['progress']['file'], 'r');
		if ($f === false) {
			if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
				$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
			} else $uid = '.';
			$error = error_get_last();
			if ($error['message'] == '') $error['message'] = 'Unknown';
			$status['progress']['error'] = 'An error occurred trying to open the temporary file used to store the backup data. (Tried to open for read so it could be compressed.) Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		@trigger_error('');
		$g = @gzopen($status['progress']['file'] . '.gz', 'w');
		if ($g === false) {
			if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
				$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
			} else $uid = '.';
			$error = error_get_last();
			if ($error['message'] == '') $error['message'] = 'Unknown';
			$status['progress']['error'] = 'An error occurred trying to open a temporary file to store the compressed backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		while (!@feof($f)) {
			@trigger_error('');
			$data = @fread($f, COMPRESS_SEGMENT_SIZE);
			if ($data === false) {
				$error = error_get_last();
				if ($error['message'] == '') $error['message'] = 'Unknown';
				$status['progress']['error'] = 'An error occurred trying to read from the temporary file used to store the backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP. The error was: ' . $error['message'];
				@fclose($f);
				@gzclose($g);
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				return -1;
			}
			@trigger_error('');
			if (@gzwrite($g, $data) === false) {
				$error = error_get_last();
				if ($error['message'] == '') $error['message'] = 'Unknown';
				$status['progress']['error'] = 'An error occurred trying to write to the temporary file used to store the compressed backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP. The error was: ' . $error['message'];
				@fclose($f);
				@gzclose($g);
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				return -1;
			}
			$job['done'] += strlen($data);
			if (!$this->Update_Backup_Mutex($status, 1)) {
				@fclose($f);
				@gzclose($g);
				return -2;
			}
		}
		if ($job['done'] == $total) {
			$job['done'] = true;
			if (!$this->Update_Backup_Mutex($status, 1)) $ret = -2;
			else $ret = 1;
		} else {
			$status['progress']['error'] = 'An error occurred compressing the backup data. Unexpected end of the source file was reached. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP.';
			if (!$this->Update_Backup_Mutex($status, 1)) $ret = -2;
			else $ret = -1;
		}
		@fclose($f);
		@gzclose($g);
		return $ret;
	}

	function Int_To_Word($in)
	{
		return chr(($in >> 8) & 0xFF) . chr($in & 0xFF);
	}

	function Int_To_Dword($in)
	{
		return chr(($in >> 24) & 0xFF) . chr(($in >> 16) & 0xFF) . chr(($in >> 8) & 0xFF) . chr($in & 0xFF);
	}

	function Process_Encrypt(& $status, & $job)
	{
		if ($this->settings['encryption_type'] == '') {
			$job['done'] = false;
			$job['messages'][] = array('Warning', 'Encryption has not been enabled - we highly recommend you do so if your server supports it.');
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return 1;
		}
		if (!function_exists('mcrypt_module_open')) {
			$this->settings['encryption_type'] = '';
			update_option('wponlinebackup_settings', $this->settings);
			$status['progress']['error'] = 'Cannot encrypt. The libmcrypt extension (php-mcrypt) was not found in your PHP installation. Please contact your host or install it yourself if you wish to enable encryption. Encryption has been disabled.';
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		$job['done'] = 0;
		if (!$this->Update_Backup_Mutex($status, 1)) return -2;
		$file = $status['progress']['file'];
		foreach ($status['progress']['job_list'] as $entry) {
			if ($entry['process'] == 'compress' && $entry['done'] === true) $file .= '.gz';
		}
		switch ($this->settings['encryption_type']) {
			case 'DES':
				$module = MCRYPT_DES;
				$module_str = 'MCRYPT_DES';
				$key_size = 8;
				break;
			case 'AES128':
				$module = MCRYPT_RIJNDAEL_128;
				$module_str = 'MCRYPT_RIJNDAEL_128';
				$key_size = 16;
				break;
			case 'AES192':
				$module = MCRYPT_RIJNDAEL_128;
				$module_str = 'MCRYPT_RIJNDAEL_128';
				$key_size = 24;
				break;
			case 'AES256':
				$module = MCRYPT_RIJNDAEL_128;
				$module_str = 'MCRYPT_RIJNDAEL_128';
				$key_size = 32;
				break;
			default:
				$module = false;
				break;
		}
		if ($module !== false) {
			@trigger_error('');
			$total = @filesize($file);
			if ($total === false) {
				if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
					$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
				} else $uid = '.';
				$error = error_get_last();
				if ($error['message'] == '') $error['message'] = 'Unknown';
				$status['progress']['error'] = 'An error occurred trying to read the size of the temporary file used to store the backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				return -1;
			}
			if ($this->settings['encryption_key'] == '') $this->settings['encryption_key'] = ' ';
			if (($key_len = strlen($key = $this->settings['encryption_key'])) < $key_size) $key = substr(str_repeat($key, (($key_size - ($key_size % $key_len)) / $key_len) + ($key_size % $key_len == 0 ? 0 : 1)), 0, $key_size);
			else $key = substr($key, 0, $key_size);
			@trigger_error('');
			if ($cipher = @mcrypt_module_open($module, '', MCRYPT_MODE_CBC, '')) {
				$iv_size = mcrypt_enc_get_iv_size($cipher);
				$iv = sha1($key);
				if (($iv_len = strlen($iv)) < $iv_size) $iv = substr(str_repeat($iv, (($iv_size - ($iv_size % $iv_len)) / $iv_len) + ($iv_size % $iv_len == 0 ? 0 : 1)), 0, $iv_size);
				else $iv = substr($iv, 0, $iv_size);
				@trigger_error('');
				if (@mcrypt_generic_init($cipher, $key, $iv) === false) {
					$error = error_get_last();
					if ($error['message'] == '') $error['message'] = 'Unknown';
					$status['progress']['error'] = 'Failed to initialize encryption with key size ' . $key_size . ' and iv size ' . $iv_size . '. The error message was: ' . $error['message'];
					if (!$this->Update_Backup_Mutex($status, 1)) return -2;
					@mcrypt_module_close($cipher);
					return -1;
				}
			} else {
				$error = error_get_last();
				if ($error['message'] == '') $error['message'] = 'Unknown';
				$status['progress']['error'] = 'Failed to open mcrypt encryption module ' . $module_str . ' in mode MCRYPT_MODE_CBC. The error message was: ' . $error['message'] . '. If you wish to disable encryption, go to the settings page and adjust the settings.';
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				return -1;
			}
		} else {
			$job['done'] = false;
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return 1;
		}
		@trigger_error('');
		$f = @fopen($file, 'r');
		if ($f === false) {
			if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
				$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
			} else $uid = '.';
			$error = error_get_last();
			if ($error['message'] == '') $error['message'] = 'Unknown';
			$status['progress']['error'] = 'An error occurred trying to open the temporary file used to store the backup data. (Tried to open for read so it could be encrypted.) Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
			@mcrypt_generic_deinit($cipher);
			@mcrypt_module_close($cipher);
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		@trigger_error('');
		$g = @fopen($file . '.enc', 'w');
		if ($g === false) {
			if (function_exists('posix_getuid') && ($user = posix_getpwuid(posix_getuid())) !== false) {
				$uid = ' (If it helps, PHP is running as user \'' . $user['name'] . '\' with UID ' . $user['uid'] . '.)';
			} else $uid = '.';
			$error = error_get_last();
			if ($error['message'] == '') $error['message'] = 'Unknown';
			$status['progress']['error'] = 'An error occurred trying to open a temporary file to store the encrypted backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP' . $uid . ' The error was: ' . $error['message'];
			@mcrypt_generic_deinit($cipher);
			@mcrypt_module_close($cipher);
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		$data = mcrypt_generic($cipher, "OBFW" . $this->Int_To_Word(2) . $this->Int_To_Dword($total));
		$data = $this->Int_To_Dword(strlen($data)) . $data;
		@trigger_error('');
		if (@fwrite($g, $data) === false) {
			$error = error_get_last();
			if ($error['message'] == '') $error['message'] = 'Unknown';
			$status['progress']['error'] = 'An error occurred trying to write to the temporary file used to store the encrypted backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP. The error was: ' . $error['message'];
			@mcrypt_generic_deinit($cipher);
			@mcrypt_module_close($cipher);
			@fclose($f);
			@gzclose($g);
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return -1;
		}
		$fail = true;
		while (!@feof($f)) {
			@trigger_error('');
			$data = @fread($f, max($total - $job['done'], ENCRYPT_SEGMENT_SIZE));
			if ($data === false) {
				$error = error_get_last();
				if ($error['message'] == '') $error['message'] = 'Unknown';
				$status['progress']['error'] = 'An error occurred trying to read from the temporary file used to store the backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP. The error was: ' . $error['message'];
				@mcrypt_generic_deinit($cipher);
				@mcrypt_module_close($cipher);
				@fclose($f);
				@gzclose($g);
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				return -1;
			}
			$job['done'] += strlen($data);
			$data = mcrypt_generic($cipher, $data);
			$data = $this->Int_To_Dword(strlen($data)) . $data;
			@trigger_error('');
			if (@fwrite($g, $data) === false) {
				$error = error_get_last();
				if ($error['message'] == '') $error['message'] = 'Unknown';
				$status['progress']['error'] = 'An error occurred trying to write to the temporary file used to store the encrypted backup data. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP. The error was: ' . $error['message'];
				@mcrypt_generic_deinit($cipher);
				@mcrypt_module_close($cipher);
				@fclose($f);
				@gzclose($g);
				if (!$this->Update_Backup_Mutex($status, 1)) return -2;
				return -1;
			}
			if (!$this->Update_Backup_Mutex($status, 1)) {
				@mcrypt_generic_deinit($cipher);
				@mcrypt_module_close($cipher);
				@fclose($f);
				@gzclose($g);
				return -2;
			}
			if ($job['done'] == $total) {
				$fail = false;
				break;
			}
		}
		if (!$fail) {
			$job['done'] = true;
			if (!$this->Update_Backup_Mutex($status, 1)) $ret = -2;
			else $ret = 1;
		} else {
			$status['progress']['error'] = 'An error occurred encrypting the backup data. Unexpected end of the source file was reached. Please ensure that the temporary path you have specified in the settings is correct (' . $this->settings['tmp_dir'] . '), and that the directory is writable by PHP.';
			if (!$this->Update_Backup_Mutex($status, 1)) $ret = -2;
			else $ret = -1;
		}
		@fclose($f);
		@gzclose($g);
		@mcrypt_generic_deinit($cipher);
		@mcrypt_module_close($cipher);
		return $ret;
	}

	function Process_Email(& $status, & $job)
	{
		if (!array_key_exists('email', $status['progress']['output_methods'])) {
			$job['done'] = false;
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return 1;
		}
		$file = $status['progress']['file'];
		$ext = '';
		foreach ($status['progress']['job_list'] as $entry) {
			if ($entry['process'] == 'compress' && $entry['done'] === true) {
				$file .= '.gz';
				$ext .= '.gz';
			}
			if ($entry['process'] == 'encrypt' && $entry['done'] === true) {
				$file .= '.enc';
				$ext .= '.enc';
			}
		}
		$job['done'] = 0;
		if (!$this->Update_Backup_Mutex($status, 1)) return -2;
		$log = $this->Generate_Log($status['progress'], true) . "\t".NL . "\t".NL . 'Backup size is: ' . $this->Fix_B(@filesize($file), true);
		$this->attachment_file = $file;
		$this->attachment_ext = $ext;
		add_action('phpmailer_init', array(& $this, 'phpmailer_init'));
		@trigger_error('');
		if (wp_mail($status['progress']['output_methods']['email'], 'WordPress database backup completed', $log, '') === false) {
			$error = error_get_last();
			if ($error['message'] == '') {
				global $phpmailer;
				if ($phpmailer->ErrorInfo == '') $error['message'] = 'Unknown';
				else $error['message'] = $phpmailer->ErrorInfo;
			}
			$job['messages'][] = array('Error', 'An error occurred sending the email: ' . $error['message']);
		} else {
			$job['messages'][] = array('Information', 'The backup was emailed to ' . $status['progress']['output_methods']['email'] . ' and should arrive shortly.');
		}
		remove_action('phpmailer_init', array(& $this, 'phpmailer_init'));
		$this->attachment_file = '';
		$this->attachment_ext = '';
		$job['done'] = true;
		if (!$this->Update_Backup_Mutex($status, 1)) return -2;
		return 1;
	}

	function Process_Transmit(& $status, & $job)
	{
		if (!array_key_exists('online', $status['progress']['output_methods'])) {
			$job['done'] = false;
			if (!$this->Update_Backup_Mutex($status, 1)) return -2;
			return 1;
		}
		$job['done'] = 0;
		if (!$this->Update_Backup_Mutex($status, 1)) return -2;
		$status['progress']['online_nonce'] = wp_hash(time() . serialize($status['progress']) . 'online', '');
		$response = wp_remote_get(BACKUP_SERVER . '/API/Backup_Start?username=' . urlencode($this->settings['username']) . '&password=' . urlencode($this->settings['password']) . '&manual=' . (array_key_exists('manual', $status['progress']['output_methods']) ? '1' : '0') . '&blogurl=' . urlencode(get_bloginfo('wpurl')) . '&nonce=' . urlencode($status['progress']['online_nonce']) . '&version=' . WPONLINEBACKUP__VERSION__, array('timeout' => 30));
		if (is_wp_error($response) || substr($response['body'], 0, 5) !== "\x01\x01OKI") {
			if (is_wp_error($response)) {
				$error_message = array();
				foreach ($response->errors as $key => $errors) $error_message[] = $key . ' - ' . (is_array($errors) ? implode(' - ', $errors) : $errors);
				$error_message = implode('; ', $error_message);
				$job['messages'][] = array('Error', 'Failed to initialize connection to backup server, the connection seemed to fail. The error message from WordPress was: ' . $error_message . '.');
			} else if (substr($response['body'], 0, 5) !== "\x01\x02ERR") $job['messages'][] = array('Error', 'Failed to initialize connection to backup server, the server returned junk. Try again later.');
			else if (substr($response['body'], 5, 6) === 'OFLINE') $job['messages'][] = array('Error', 'Failed to initialize connection to backup server, the server is temporarily down for maintenance.');
			else if (substr($response['body'], 5, 6) !== 'ONLINE') $job['messages'][] = array('Error', 'Failed to initialize connection to backup server, the server returned a junk status line. Maybe your plugin needs updating?');
			else $job['messages'][] = array('Error', substr($response['body'], 11));
			$status['progress']['online_nonce'] = '';
		} else {
			if (strlen($response['body']) > 5) $job['messages'][] = array('Information', substr($response['body'], 5));
		}
		$job['done'] = true;
		if (!$this->Update_Backup_Mutex($status, 1)) return -2;
		return 1;
	}

//===== Backup file decryption routine
//==================================================

	function Word_To_Int($in)
	{
		return (ord($in[0]) << 8) + ord($in[1]);
	}

	function Dword_To_Int($in)
	{
		return (ord($in[0]) << 24) + (ord($in[1]) << 16) + (ord($in[2]) << 8) + ord($in[3]);
	}

	function Decrypt_Backup($file, $new_filename, $type, $key)
	{
		if (!function_exists('mcrypt_module_open')) {
			return 'Cannot decrypt. The libmcrypt extension (php-mcrypt) was not found in your PHP installation. Please contact your host or install it yourself if you wish to enable decryption.';
		}
		switch ($type) {
			case 'DES':
			default:
				$module = MCRYPT_DES;
				$key_size = 8;
				break;
			case 'AES128':
				$module = MCRYPT_RIJNDAEL_128;
				$key_size = 16;
				break;
			case 'AES192':
				$module = MCRYPT_RIJNDAEL_128;
				$key_size = 24;
				break;
			case 'AES256':
				$module = MCRYPT_RIJNDAEL_128;
				$key_size = 32;
				break;
		}
		if (($key_len = strlen($key)) < $key_size) $key = substr(str_repeat($key, (($key_size - ($key_size % $key_len)) / $key_len) + ($key_size % $key_len == 0 ? 0 : 1)), 0, $key_size);
		else $key = substr($key, 0, $key_size);
		if ($cipher = @mcrypt_module_open($module, '', MCRYPT_MODE_CBC, '')) {
			$iv_size = mcrypt_enc_get_iv_size($cipher);
			$iv = sha1($key);
			if (($iv_len = strlen($iv)) < $iv_size) $iv = substr(str_repeat($iv, (($iv_size - ($iv_size % $iv_len)) / $iv_len) + ($iv_size % $iv_len == 0 ? 0 : 1)), 0, $iv_size);
			else $iv = substr($iv, 0, $iv_size);
			@trigger_error('');
			if (@mcrypt_generic_init($cipher, $key, $iv) === false) {
				$error = error_get_last();
				@mcrypt_module_close($cipher);
				return 'Failed to initialize encryption with key size ' . $key_size . ' and iv size ' . $iv_size . '. The error message was: ' . $error['message'];
			}
		} else {
			$error = error_get_last();
			return 'Failed to open mcrypt encryption module ' . $module_str . ' in mode MCRYPT_MODE_CBC. The error message was: ' . $error['message'] . '. If you wish to disable encryption, go to the settings page and adjust the settings.';
		}
		@trigger_error('');
		$f = @fopen($file, 'r');
		if ($f === false) {
			$error = error_get_last();
			@mcrypt_generic_deinit($cipher);
			@mcrypt_module_close($cipher);
			return 'There was an error initiating the decryption process. The error message was: ' . $error['message'];
		}
		$data = @fread($f, 4);
		if ($data === false) {
			$error = error_get_last();
			@mcrypt_generic_deinit($cipher);
			@mcrypt_module_close($cipher);
			@fclose($f);
			return 'There was an error initiating the decryption process. The error message was: ' . $error['message'];
		}
		$data_len = $this->Dword_To_Int($data);
		$data = @fread($f, $data_len);
		if ($data === false) {
			$error = error_get_last();
			@mcrypt_generic_deinit($cipher);
			@mcrypt_module_close($cipher);
			@fclose($f);
			return 'There was an error initiating the decryption process. The error message was: ' . $error['message'];
		}
		$data = mdecrypt_generic($cipher, $data);
		if (strlen($data) >= 9 && substr($data, 0, 9) === "\x01\x01ISVALID") {
			$totalsize = false;
		} else if (strlen($data) >= 10 && substr($data, 0, 4) === "OBFW") {
			$version = $this->Word_To_Int(substr($data, 4, 2));
			if ($version == 2) {
				$totalsize = $this->Dword_To_Int(substr($data, 6, 4));
			} else {
				@mcrypt_generic_deinit($cipher);
				@mcrypt_module_close($cipher);
				@fclose($f);
				return 'Decryption has failed. The backup file uploaded was generated by a newer version of the plugin. Please update the plugin and try again.';
			}
		} else {
			$error = error_get_last();
			@mcrypt_generic_deinit($cipher);
			@mcrypt_module_close($cipher);
			@fclose($f);
			return 'Decryption has failed. Either the encryption key you specified is incorrect, or the backup was not encrypted with ' . $type . '.';
		}
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . $new_filename);
		if ($totalsize !== false) {
			header('Content-Length: ' . $totalsize);
			$donesize = 0;
		}
		set_time_limit(0);
		while (!@feof($f)) {
			@trigger_error('');
			$data = @fread($f, 4);
			if ($data === false) {
				@mcrypt_generic_deinit($cipher);
				@mcrypt_module_close($cipher);
				@fclose($f);
				break;
			}
			$data_len = $this->Dword_To_Int($data);
			$data = @fread($f, $data_len);
			if ($data === false) {
				@mcrypt_generic_deinit($cipher);
				@mcrypt_module_close($cipher);
				@fclose($f);
				break;
			}
			$data = mdecrypt_generic($cipher, $data);
			if ($totalsize !== false) {
				$donesize += strlen($data);
				if ($donesize > $totalsize) {
					echo substr($data, 0, strlen($data) - ($donesize - $totalsize));
					break;
				}
			}
			echo $data;
		}
		@mcrypt_generic_deinit($cipher);
		@mcrypt_module_close($cipher);
		@fclose($f);
		return true;
	}
}

$WPOnlineBackup = new WPOnlineBackup();

?>
