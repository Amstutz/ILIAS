<?php

namespace ILIAS\Tabs\GlobalScreen;

use ILIAS\GlobalScreen\Scope\MetaBar\Provider\AbstractTabProvider;
use ILIAS\Data\URI;

/**
 * Class LegacyTabsProvider
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class LegacyTabsProvider extends AbstractTabProvider
{
    public function getMainTabs() : array
    {
        global $DIC;
        $tabs = [];
        foreach ($DIC->tabs()->getTabsHolder()->getTabs() as $i => $tab) {
            $tab_item = $this->factory->link($this->if->identifier("tab_$i"), $tab['title']);
            if ($tab['url']) {
                $uri = new URI(rtrim(ILIAS_HTTP_PATH, "/") . "/" . ltrim($tab['url'], "./"));
                $tab_item = $tab_item->withURI($uri);
            }
            $tabs[] = $tab_item;
        }

        return $tabs;
    }

    public function getSubTabs() : array
    {
        return [];
    }

}
