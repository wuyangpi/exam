<?php

require __DIR__.'/vendor/Autoload.php';
require __DIR__.'/MyGreeter/Client.php';
require __DIR__.'/test/MyGreeter_Client_Test.php';

$mgClient = new \MyGreeter\Client();
echo $mgClient->getGreeting();
$test = new MyGreeter_Client_Test($mgClient);

$test->test_Instance();

$test->test_getGreeting();

exit();
