<?php

namespace block_quiz_reporting\automapper_plus;

/**
 * Class DataType
 *
 * @package AutoMapperPlus
 */
final class DataType
{
    public const ARRAY = 'array';

    public static function isDataType(string $type): bool
    {
        return \in_array($type, [self::ARRAY], true);
    }
}
