<?php

declare(strict_types = 1);

namespace ValanticSpryker\Glue\GlueApplication\Rest\Language;

use Spryker\Glue\GlueApplication\Rest\Language\LanguageNegotiation as SprykerLanguageNegotiation;

class LanguageNegotiation extends SprykerLanguageNegotiation
{
    /**
     * @param string $acceptLanguage
     *
     * @return string
     */
    /**
     * @param string $acceptLanguage
     *
     * @return string
     */
    public function getLanguageIsoCode(string $acceptLanguage): string
    {
        $acceptLanguage = str_replace('_', '-', $acceptLanguage);

        return parent::getLanguageIsoCode($acceptLanguage);
    }
}
