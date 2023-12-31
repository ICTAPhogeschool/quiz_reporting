<?php

namespace block_quiz_reporting\automapper_plus\PropertyAccessor;

/**
 * Interface PropertyWriterInterface
 *
 * @package AutoMapperPlus\PropertyAccessor
 */
interface PropertyWriterInterface
{
    /**
     * @param $object
     * @param string $propertyName
     * @param $value
     */
    public function setProperty($object, string $propertyName, $value): void;
}
