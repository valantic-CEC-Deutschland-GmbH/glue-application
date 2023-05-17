<?php

declare(strict_types = 1);

namespace ValanticSpryker\Glue\GlueApplication;

use Spryker\Glue\GlueApplication\GlueApplicationFactory as SprykerGlueApplicationFactory;
use Spryker\Glue\GlueApplication\Rest\Language\LanguageNegotiationInterface;
use ValanticSpryker\Glue\GlueApplication\Rest\Language\LanguageNegotiation;

/**
 * @method \Spryker\Glue\GlueApplication\GlueApplicationConfig getConfig()
 */
class GlueApplicationFactory extends SprykerGlueApplicationFactory
{
    /**
     * @deprecated Will be removed without replacement.
     *
     * @return \Spryker\Glue\GlueApplication\Rest\Language\LanguageNegotiationInterface
     */
    public function createLanguageNegotiation(): LanguageNegotiationInterface
    {
        return new LanguageNegotiation($this->getStoreClient(), $this->createNegotiator());
    }
}
