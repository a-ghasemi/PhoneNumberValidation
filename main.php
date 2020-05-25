<?php
// read the list
// choose a line
// send it to queue for validating
// select validation provider order
// log the result

require_once(__DIR__ . "/vendor/autoload.php");

$kernel = new \App\Kernel(__DIR__ . '/list.txt',__DIR__ . '/result/log.txt');

$kernel->main();