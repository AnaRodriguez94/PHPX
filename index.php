<?php


$tweetJson = file_get_contents('tweet.json');

$tweets  = json_decode($tweetJson, true);



require_once "index.html";
