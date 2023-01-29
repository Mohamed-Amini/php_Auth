<?php

$dbhost = ''; // your hostname
$dbuser = ''; // your username
$dbpassword = ''; // your database password
$dbname = ''; // name of the database

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)) {
    die("Failed to connect to DATABASE");
}