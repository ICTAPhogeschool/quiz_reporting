<?php

namespace block_quiz_reporting\automapper_plus\MappingOperation;

/**
 * Trait ContextAwareTrait
 *
 * @package AutoMapperPlus\MappingOperation
 */
trait ContextAwareTrait {
    /**
     * @var array
     */
    protected $context = [];

    /**
     * @inheritdoc
     */
    public function setContext(array $context = []): void
    {
        $this->context = $context;
    }
}
