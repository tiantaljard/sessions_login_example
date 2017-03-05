<?php
/**
 * Created by PhpStorm.
 * User: TianTaljard
 * Date: 05/03/2017
 * Time: 09:17
 */

/* These are our valid username and passwords */
$user = 'tian';
$pass = 'taljard';

if (isset($_POST['username']) && isset($_POST['password'])) {

    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {

            setcookie('username', $_POST['username'] );
            setcookie (access_level,'standarduser');

        header('Location: index.php');

    } else {
        echo 'Username/Password Invalid';
    }

} else {
    echo 'You must supply a username and password.';
}
?>
