<?php

require 'vendor/autoload.php';

use JMOlivas\Demo\Logger;

echo 'Logger example' . PHP_EOL;
echo '********************' . PHP_EOL;
$logger = new Logger();
$logger->log('Abort, Retry, Ignore?', 'error');
$logger->log('Keyboard not found, Press F1 to continue.', 'error');
$logger->log('Lorem ipsum dolor sit amet', 'error');
$logger->log('Excepteur sint occaecat cupidatat non proident', 'error');

