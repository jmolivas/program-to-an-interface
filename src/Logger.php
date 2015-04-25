<?php

namespace JMOlivas\Demo;

use JMOlivas\Demo\Formatter\XmlFormatter;

class Logger
{
    public function log($message, $level = 'error')
    {
        $formatter = new XmlFormatter();

        $log = $formatter->format($message, $level);
        $this->writeLog($log);
    }

    public function writeLog($log)
    {
        echo $log . PHP_EOL;
    }
}
