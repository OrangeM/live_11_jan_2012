<div class="wrap">

<h2>Ban Hammer</h2>

<?php
global $wpdb;

// Checks for presence of the cURL extension.
function _iscurlinstalled() {
	if  (in_array  ('curl', get_loaded_extensions())) {
		return true;
	}
	else{
		return false;
	}
}

        if (isset($_POST['update']))
        {
        // Update the Blacklist
                if ($banhammer_keys = $_POST['blacklist_keys'])
                {
                        $banhammer_array = explode("\n", $banhammer_keys);
                        sort ($banhammer_array);
                        $banhammer_string = implode("\n", $banhammer_array);
                        update_option('blacklist_keys', $banhammer_string);
                }

        // Update Stop Forum Spam
                if ($banhammer_newsfs = $_POST['banhammer_newsfs'])
                {
                        update_option('banhammer_stopforumspam', $banhammer_newsfs);
                }
                else
                {
                        update_option('banhammer_stopforumspam', '0');
                }

        // Update Ban Message
                if ($banhammer_newmess = $_POST['banhammer_newmess'])
                {
                        update_option('banhammer_message', $banhammer_newmess);
                }

?>
        <div id="message" class="updated fade"><p><strong>Options Updated!</strong></p></div>
<?php
        }

        if (get_option('banhammer_stopforumspam') != '0' )
        {
                $banhammer_sfs = ' checked="checked"';
        } else {
                $banhammer_sfs = '';
        }
?>

<form method="post" width='1'>

<fieldset class="options">
<legend><h3>Personalize the Message</h3></legend>
<p>The message below is displayed to users who are not allowed to register on your blog. Edit is as you see fit, but remember you don't get a LOT of space so keep it simple.</p>

<textarea name='banhammer_newmess' cols='80' rows='2'><?php echo get_option('banhammer_message'); ?></textarea>
</fieldset>


<?php if (_iscurlinstalled()) { ?>
<fieldset class="options">
<legend><h3>Use StopForumSpam.com?</h3></legend>
<p> <input type="checkbox" id="banhammer_newsfs" name="banhammer_newsfs" value="1" <?php echo $banhammer_sfs ?> /> <a href="http://www.stopforumspam.com/">StopForumSpam.com</a> is a repository for forum spambots.  Since a disturbingly high number of them also sign up on blogs, some people may want to block them here as well.  If you do, check the box. If not, leave it alone (which is the default).</p>
</fieldset>
<?php 	}
	else { ?>
		<p>It does not appear that you have cURL installed on your server.  The StopForumSpam checker will not run without it, and as such, you cannot use it.  Sorry about that. Ask your webhost about getting cURL installed.</p>
<?php } ?>

<?php
if (get_option('banhammer_stopforumspam') != '0' )
        {
?>

<p>For a list of all users who should have been blocked by StopForumSpam, see <a href="tools.php?page=ban-hammer/ban-hammer_users.php">Ban Hammer - Users</a>.  Depending on how many users you have registered, this may take a long time to run.</p>

<?php
        }

?>

<fieldset class="options">
<legend><h3>Blacklisted Domains</h3></legend>
<p>The domains added below will <strong>not</strong> be allowed to be used during registration. These are the same as the ones listed in the <em>Comment Blacklist</em> on the <a href=options-discussion.php>Discussion Settings</a> page, but y'know how it is.</p>

<textarea name="blacklist_keys" cols="40" rows="15"><?php
        $blacklist = get_option('blacklist_keys');
        echo $blacklist;
?></textarea>
</fieldset>
        <p class="submit"><input type="submit" name="update" value="Update Options" /></p>

</form>

</div>