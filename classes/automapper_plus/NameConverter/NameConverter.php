<?php

namespace block_apvaardig_digitap\automapper_plus\NameConverter;

use block_apvaardig_digitap\automapper_plus\NameConverter\NamingConvention\NamingConventionInterface;

/**
 * Class NameConverter
 *
 * @package AutoMapperPlus\NameConverter
 */
class NameConverter implements NameConverterInterface
{
    /**
     * @inheritdoc
     */
    public static function convert(
        NamingConventionInterface $sourceNamingConvention,
        NamingConventionInterface $targetNamingConvention,
        string $source
    ): string {
        $parts = $sourceNamingConvention->toParts($source);

        return $targetNamingConvention->fromParts($parts);
    }
}