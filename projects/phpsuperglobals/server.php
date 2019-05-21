<?php

// Server side
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Server Address' => $_SERVER['SERVER_ADDR'],
    'Server Protocol' => $_SERVER['SERVER_PROTOCOL']


];
/* Client side
* (NTS: Server side and client side is called a "Full Stack")
*/
$client = [
  'Client Side Info' => $_SERVER['HTTP_USER_AGENT'],
  'Client IP' => $_SERVER['REMOTE_ADDR'],
  'Remote Port' => $_SERVER['REMOTE_PORT']
];
echo '<br><hr><br>';
?>
