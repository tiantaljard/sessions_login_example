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

        if (isset($_POST['rememberme'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'www.example.com');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/account', 'www.example.com');

        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $_POST['username'], false, '/account', 'www.example.com');
            setcookie('password', md5($_POST['password']), false, '/account', 'www.example.com');
        }
        header('Location: index.php');

    } else {
        echo 'Username/Password Invalid';
    }

} else {
    echo 'You must supply a username and password.';
}
?>
