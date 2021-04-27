<?php namespace ILIAS\GlobalScreen\Collector;

use ILIAS\GlobalScreen\Provider\ProviderFactory;
use ILIAS\GlobalScreen\Scope\Content\Tabs\Provider\TabProvider;

/**
 * Class ResolverFactory
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ResolverFactory
{
    /**
     * @var ProviderFactory
     */
    private $provider_factory;

    /**
     * CollectorFactory constructor.
     * @param ProviderFactory $provider_factory
     */
    public function __construct(ProviderFactory $provider_factory)
    {
        $this->provider_factory = $provider_factory;
    }

    public function tabs() : TabProvider
    {
        $provider = $this->provider_factory->getTabsProvider();

        return reset($provider);
    }
}
