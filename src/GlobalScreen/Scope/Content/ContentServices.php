<?php namespace ILIAS\GlobalScreen\Scope\Content;

use ILIAS\GlobalScreen\SingletonTrait;
use ILIAS\GlobalScreen\Scope\Content\Tabs\Factory\TabItemFactory;
use ILIAS\GlobalScreen\Scope\Content\Inner\Factory\InnerContentFactory;

/**
 * Class ContentServices
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ContentServices
{
    use SingletonTrait;

    public function inner() : InnerContentFactory
    {
        return $this->get(InnerContentFactory::class);
    }

    public function tabs() : TabItemFactory
    {
        return $this->get(TabItemFactory::class);
    }
}
