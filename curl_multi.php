<?php

$url = 'http://xxx.test/';

$ch_1 = curl_init($url);
$ch_2 = curl_init($url);
$ch_3 = curl_init($url);
curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_3, CURLOPT_RETURNTRANSFER, true);
  
// build the multi-curl handle, adding both $ch
$mh = curl_multi_init();
curl_multi_add_handle($mh, $ch_1);
curl_multi_add_handle($mh, $ch_2);
curl_multi_add_handle($mh, $ch_3);
  
// execute all queries simultaneously, and continue when all are complete
  $running = null;
  do {
    curl_multi_exec($mh, $running);
  } while ($running);

// close the handles
curl_multi_remove_handle($mh, $ch_1);
curl_multi_remove_handle($mh, $ch_2);
curl_multi_remove_handle($mh, $ch_3);
curl_multi_close($mh);
  
// all of our requests are done, we can now access the results
$response_1 = curl_multi_getcontent($ch_1);
$response_2 = curl_multi_getcontent($ch_2);
$response_3 = curl_multi_getcontent($ch_3);

var_dump($response_1);
var_dump($response_2);
var_dump($response_3);