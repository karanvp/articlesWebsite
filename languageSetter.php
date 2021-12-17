<?php 

session_start();
$lang = $_GET['lang'];
$_SESSION['lang'] = $lang;
echo $lang;
// header("localhost:8888/article-website/hi/home-page");

?>