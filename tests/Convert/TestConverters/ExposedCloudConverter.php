<?php

namespace WebPConvert\Tests\Convert\TestConverters;

use WebPConvert\Convert\BaseConverters\AbstractCloudConverter;

/**
 * Class for exposing otherwise unaccessible methods of AbstractConverter,
 * - so they can be tested
 *
 * TODO: expose and test more methods! (and make more methods private/protected in AbstractConverter)
 */
class ExposedCloudConverter extends AbstractCloudConverter {

    protected function getOptionDefinitionsExtra()
    {
        return [];
    }

    public function doActualConvert()
    {
        file_put_contents($this->destination, 'we-pretend-this-is-a-valid-webp!');
    }

    public static function exposedParseShortHandSize($shortHandSize)
    {
        return self::parseShortHandSize($shortHandSize);
    }
}
