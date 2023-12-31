<?php

namespace block_quiz_reporting\automapper_plus\Exception;

class UnsupportedSourceTypeException extends AutoMapperPlusException
{
    /**
     * @param string $type
     * @return UnsupportedSourceTypeException
     */
    public static function fromType($type): UnsupportedSourceTypeException
    {
        $message = sprintf('Expected object or array as a source, got %s.', $type);

        return new static($message);
    }
}
