<?php

namespace block_quiz_reporting\automapper_plus\MappingOperation\Implementations;

use block_quiz_reporting\automapper_plus\MappingOperation\ContextAwareOperation;
use block_quiz_reporting\automapper_plus\MappingOperation\ContextAwareTrait;
use block_quiz_reporting\automapper_plus\MappingOperation\DefaultMappingOperation;
use block_quiz_reporting\automapper_plus\MappingOperation\MapperAwareOperation;
use block_quiz_reporting\automapper_plus\MappingOperation\MapperAwareTrait;

/**
 * Class MapFrom
 *
 * @package AutoMapperPlus\MappingOperation\Implementations
 */
class MapFrom extends DefaultMappingOperation implements
    MapperAwareOperation,
    ContextAwareOperation
{
    use MapperAwareTrait;
    use ContextAwareTrait;

    /**
     * @var callable
     */
    protected $valueCallback;

    /**
     * MapFrom constructor.
     *
     * @param callable $valueCallback
     */
    public function __construct(callable $valueCallback)
    {
        $this->valueCallback = $valueCallback;
    }

    /**
     * @inheritdoc
     */
    protected function getSourceValue($source, string $propertyName)
    {
        return ($this->valueCallback)($source, $this->mapper, $this->context);
    }

    /**
     * @inheritdoc
     */
    protected function canMapProperty(string $propertyName, $source): bool
    {
        // Mapping with a callback is always possible, regardless of the source
        // properties.
        return true;
    }

    /**
     * @inheritdoc
     */
    protected function setDestinationValue(
        $destination,
        string $propertyName,
        $value
    ): void {
        $this->propertyWriter->setProperty(
            $destination,
            $propertyName,
            $value
        );
    }
}
