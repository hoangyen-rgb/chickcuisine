<?php
    require '../../global.php';
    require '../../dao/user.php';
    extract($_REQUEST);
    $wrong_pass = false;
    if (isset($email) && isset($password)) {
        $user = get_user_by_email($email);
        if ($user) {
            if (password_verify($password, $user['Password'])) {
                $_SESSION['LOGGED_IN_USER_ID'] = $user['Id'];
                header("location: ".$SITE_URL."/trangchu");
            } else {
                $wrong_pass = true;
            }
        }    
    }

    $VIEW_NAME = "dangnhap/dangnhap.php";
    require '../layout.php';  
?>