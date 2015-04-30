<?php

namespace JMOlivas\Demo;

use JMOlivas\Demo\Formatter\XmlFormatter;
use JMOlivas\Demo\Formatter\JsonFormatter;

class Logger
{

    private $formatter;

    public function setXmlFormatter(XmlFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function setJsonFormatter(JsonFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function log($message, $level = 'error')
    {
        $log = $this->formatter->format($message, $level);
        $this->writeLog($log);
    }

    public function writeLog($log)
    {
        echo $log . PHP_EOL;
    }
}
