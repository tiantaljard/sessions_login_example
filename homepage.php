<?php
session_start();

$access_level = $_COOKIE['access_level'];
$username = $_COOKIE['username'];

displayAccessLevelInformation($access_level,$username);

function displayAccessLevelInformation($access_level,$username)
{
    if ($access_level == "standarduser") {
        echo " <p>You are SESSIONS currently logged in as a {$access_level} user </p>";
        echo " <p>Your user name is {$username} </p>";
    } elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a {$access_level} user</p>";
        echo "<p>You now have access to additional administrative features</p>";
        echo " <p>Your user name is {$username} </p>";
    }
}