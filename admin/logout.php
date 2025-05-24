<?php
session_start();
session_destroy();
$url = 'http://localhost/OnlineFood-PHP/';
header('Location: ' . $url);

?>