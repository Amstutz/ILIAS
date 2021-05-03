<?php

namespace ILIAS\Tabs\GlobalScreen;

/**
 * Class LegacyStaticTabsHolder
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class LegacyStaticTabsHolder
{
    protected $tabs = [];

    public function addTab(string $id, string $title, string $url) : void
    {
        $this->tabs[$id] = ['title' => $title, 'url' => $url];
    }

    public function getTabs() : array
    {
        return $this->tabs;
    }
}
