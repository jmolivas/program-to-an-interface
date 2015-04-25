<?php

namespace JMOlivas\Demo\Formatter;

class XmlFormatter
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
