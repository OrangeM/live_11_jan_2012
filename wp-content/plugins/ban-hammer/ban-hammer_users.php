<div class="wrap">
<h2>Ban Hammer - Users</h2>

<?php
        global $wpdb;
        $aUsersID = $wpdb->get_col( $wpdb->prepare("SELECT $wpdb->users.ID FROM $wpdb->users ORDER BY ID DESC"));
        $size = 40;
        $default = $wpdb->get_var("SELECT option_value FROM $wpdb->options WHERE option_name='avatar_default'");
?>

<h3>Hammer the Users</h3>

<p>Sometimes a user registers before StopForumSpam catches them. Check here to see who's on your naughty list!</p>

<?php
if (get_option('banhammer_stopforumspam') != '0' )
{
?>
<table class="widefat" cellspacing="0">
<thead>
<tr class="thead">
        <th scope="col" id="username" class="manage-column column-username" style="">Username</th>
        <th scope="col" id="fullname" class="manage-column column-fullname" style="">Name</th>
        <th scope="col" id="email" class="manage-column column-email" style="">E-mail</th>
        <th scope="col" id="registered" class="manage-column column-registered" style="">Registered</th>
</tr>
</thead>

<tbody id="users" class="list:user user-list">
<?php

        foreach ( $aUsersID as $iUserID ) :
                $user = get_userdata( $iUserID );
                $email = $user->user_email;
                $username = $user->display_name;
                $registered = strtotime($user->user_registered);
                $grav_url = "http://www.gravatar.com/avatar/".md5( strtolower($email) )."?d=".$default."&size=".$size;

                // Check the users against StopForumSpam
                $ch = curl_init();
                $StopForumSpam = "http://www.stopforumspam.com/api?email=$email";
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $StopForumSpam);
                $check = curl_exec($ch);
                curl_close($ch);

                $test = "yes";
                if ( strpos( $check, $test) > 0 )
                {
?>
                <tr id="<?php echo $iUserID; ?>">
                  <td class="username column-username"><img alt="Avatar" src="<?php echo $grav_url; ?>" class="avatar avatar-<?php echo $size; ?> photo" height="<?php echo $size; ?>" width="<?php echo $size; ?>" /> <strong><a href="user-edit.php?user_id=<?php echo $user->ID ?>;wp_http_referer=%2Fblog%2Fwp-admin%2Fusers.php"><?php echo $user->user_login; ?></a></strong><br /><div class="row-actions"><span class='edit'><a href="user-edit.php?user_id=<?php echo $user->ID ?>&#038;wp_http_referer=%2Fblog%2Fwp-admin%2Fusers.php">Edit</a></span></div></td>
                  <td class="fullname column-fullname"><?php echo $username; ?></td>
                  <td class="email column-email"><?php echo $email; ?> is listed on StopForumSpam.com.</td>
                  <td class="registered column-registered"><?php echo date('d M Y \- g:h:s a', $registered); ?></td>
                </tr>
                  <?php 
                }
                else { }
        endforeach;
?>
</table>
<?php
}
else { ?>
<p>You're not using StopForumSpam.  You need to turn that on <a href="tools.php?page=ban-hammer/ban-hammer_options.php">here</a></p>

<?php } ?>
</div>