<?php

namespace ILIAS\Tabs\GlobalScreen;

use ILIAS\GlobalScreen\Scope\MetaBar\Provider\AbstractTabProvider;

/**
 * Class LegacyTabsProvider
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class LegacyTabsProvider extends AbstractTabProvider
{
    public function getMainTabs() : array
    {
        return [
            $this->factory->link($this->if->identifier('link_1'), 'Title 1'),
            $this->factory->link($this->if->identifier('link_2'), 'Title 2'),
            $this->factory->link($this->if->identifier('link_3'), 'Title 3'),
        ];
    }

    public function getSubTabs() : array
    {
        return [];
    }

}
