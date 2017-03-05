<?php
session_start();

$access_level = $_SESSION['access_level_session'];
$username = $_SESSION['username_session'];
$password = $_SESSION['password'];

displayAccessLevelInformation($access_level,$username,$password);

function displayAccessLevelInformation($access_level,$username,$password)
{
    if ($access_level == "standarduser") {
        echo " <p>You are $password currently logged in as a {$access_level} user </p>";
        echo " <p>Your user name is {$username} </p>";
    } elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a {$access_level} user</p>";
        echo "<p>You now have access to additional administrative features</p>";
        echo " <p>Your user name is {$username} </p>";
    }
}
?>