<?php

namespace JMOlivas\Demo\Formatter;

class XmlFormatter implements FormatterInterface
{
    public function format($message, $level)
    {
        return sprintf(
            '<%s>%s</%s>',
            $level,
            $message,
            $level
        );
    }
}
