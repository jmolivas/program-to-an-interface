<?php

namespace JMOlivas\Demo\Formatter;

class JsonFormatter
{
    public function format($message, $level)
    {
        return sprintf(
          '{ %s: "%s" }',
          $level,
          $message
        );
    }
}
