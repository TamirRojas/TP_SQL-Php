<?php 
$alias = $_POST['alias'];
setcookie('user_info', $alias);
// header('Location:display_garages.php');

if(!empty($alias)){
    header('Location:display_garages.php?alert=cookie_succesful');
}
else{
    header('Location:auth.php?alert=cookie_error');
}
?>