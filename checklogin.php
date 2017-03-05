<?php
/**
 * Created by PhpStorm.
 * User: TianTaljard
 * Date: 05/03/2017
 * Time: 09:17
 */
$truename="tian";
$trueword="taljard";

$username=$_POST["name"];
$password=$_POST["password"];

if ($username==$truename && $password==$trueword)
{
    setcookie('username',$username);
    setcookie('access_level','standarduser');

}

header('Location: loggedIn.php')

?>
