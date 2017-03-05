<?php
/**
 * Created by PhpStorm.
 * User: TianTaljard
 * Date: 05/03/2017
 * Time: 09:17 h
 */
$truename="tian";
$trueword="taljard";

$username=$_POST["name"];
$password=$_POST["password"];

if ($username==$truename && $password==$trueword)
{
    session_start();
    $_SESSION['access_level_session']="standarduser";
    $_SESSION['username_session']=$username;
    $_SESSION['password']=$password;
    //setcookie('username',$username);
    //setcookie('access_level','standarduser');

}

header('Location: homepage.php')

?>
