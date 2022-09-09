<?php
include 'FacebookApi.php';
   $access_token = 'EAAgK1sZBrlvkBAMITNZAkN0ruQUy8s43ZB4Wbl4d2OSPdXrDjmGtPdx5mbrYBck5wg3yZCZASq9ooLBCCUZCxwfdneYFTfaRm1olpqYYkyUzqPgYfFSCOa1CllAvt1iafV6fJ5tEg24ebv2aRcBuIBhNRhDL1JQT21Pi6UpWe9WwZDZD';
$facebookData = array();
$facebookData['consumer_key'] = '2263717537093369';
$facebookData['consumer_secret'] = '8ef94ab7e9f04d18bff036261099d0d3';
 
$title = "How to Auto Post on Facebook Using PHP";
$targetUrl = "http://www.tricksofit.com/2015/01/how-to-auto-post-on-facebook-using-php";
$imgUrl = "http://www.tricksofit.com/wp-content/uploads/2015/01/HOW-TO-AUTO-POST-ON-FACEBOOK-USING-PHP.png";
$description = "Every other website shares posts automatically to the user's facebook wall using facebook app. So today I will show how to auto post on Facebook using PHP."; 
 
$facebook = new FacebookApi($facebookData);
$return = $facebook->share($title, $targetUrl, $imgUrl, $description, $access_token);


print_r($return);