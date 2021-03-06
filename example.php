<?php

require 'vendor/autoload.php';

use JMOlivas\Demo\Logger;
use JMOlivas\Demo\Formatter\XmlFormatter;
use JMOlivas\Demo\Formatter\JsonFormatter;
use JMOlivas\Demo\Formatter\NullFormatter;

echo 'Logger example' . PHP_EOL;
echo '******************** XmlFormatter' . PHP_EOL;
$logger = new Logger();
$logger->setFormatter(new XmlFormatter());
$logger->log('Abort, Retry, Ignore?', 'error');
$logger->log('Keyboard not found, Press F1 to continue.', 'error');
echo '******************** JsonFormatter' . PHP_EOL;
$logger->setFormatter(new JsonFormatter());
$logger->log('Lorem ipsum dolor sit amet', 'error');
$logger->log('Excepteur sint occaecat cupidatat non proident', 'error');
echo '******************** NullFormatter' . PHP_EOL;
$logger->setFormatter(new NullFormatter());
$logger->log('This will not be recorded', 'error');
$logger->log('Redirecting to /dev/null', 'error');
