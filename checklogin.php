<?php
/**
 * Created by PhpStorm.
 * User: TianTaljard
 * Date: 05/03/2017
 * Time: 09:17
 */
$username="tian";
$password="taljard";

$username=$_POST["name"];
$password=$_POST["password"];

if ($username=="username" && $password=="password")
{
    setcookie('access_level','standarduser');

}

header('Location: loggedIn.php')

?>
