<?php

include "./classes/Query.php";

$lang = $_GET['lang'];
$user = $_GET['user'];


$query = new q\Query();
$query->updateLangPreference($lang,$user);



?>