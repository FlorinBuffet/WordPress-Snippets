$user_id = get_user_by('login', 'your_username')->ID;
$new_password = 'your_new_password'
wp_set_password( $new_password, $user_id )
