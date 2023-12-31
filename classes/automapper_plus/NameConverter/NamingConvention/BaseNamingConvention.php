<?php

namespace block_quiz_reporting\automapper_plus\NameConverter\NamingConvention;

/**
 * Class BaseNamingConvention
 *
 * @package AutoMapperPlus\NameConverter\NamingConvention
 */
abstract class BaseNamingConvention implements NamingConventionInterface
{
    /**
     * @param array $parts
     * @return array
     */
    public function normalize(array $parts): array
    {
        return array_map('strtolower', $parts);
    }
}
