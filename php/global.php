<?php
//This file contains all the globally accessible variables and constants.

//Global variables
$loggedInUser = "";
$loginChecked = false;
$config = Array();
$dictionary = Array();
$users = Array();
$jams = Array();
$authors = Array();
$entries = Array();
$themes = Array();
$assets = Array();
$polls = Array();

$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

require "Mustache/Autoloader.php";
Mustache_Autoloader::register();
$mustache = new Mustache_Engine;

?>