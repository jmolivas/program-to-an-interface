<?php

namespace JMOlivas\Demo\Formatter;

class NullFormatter implements FormatterInterface
{
    public function format($message, $level)
    {
        return; // just silence the error.
    }
}
