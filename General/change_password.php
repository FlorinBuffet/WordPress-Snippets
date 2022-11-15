$user_id = get_user_by('login', 'your_username')->ID; // replace 'your_username' by username you want to change password for
$new_password = 'your_new_password'; // replace 'your_new_password' by the new password you want to set for 'your_username'
wp_set_password( $new_password, $user_id );
