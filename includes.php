<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://graph.facebook.com/coodingd/feed?message=Become%2520a%2520Facebook%2520developer!&link=https://www.coodingdessign.com&published=1&access_token=EAAgK1sZBrlvkBAMITNZAkN0ruQUy8s43ZB4Wbl4d2OSPdXrDjmGtPdx5mbrYBck5wg3yZCZASq9ooLBCCUZCxwfdneYFTfaRm1olpqYYkyUzqPgYfFSCOa1CllAvt1iafV6fJ5tEg24ebv2aRcBuIBhNRhDL1JQT21Pi6UpWe9WwZDZD',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


