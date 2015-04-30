<?php

namespace JMOlivas\Demo\Formatter;

class JsonFormatter implements FormatterInterface
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
