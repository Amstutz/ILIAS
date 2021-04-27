<?php

namespace ILIAS\Tabs\GlobalScreen;

/**
 * Class LegacyStaticTabsHolder
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class LegacyStaticTabsHolder
{
    protected static $tabs = [];

    public static function addTab(string $id, string $title, string $url) : void
    {
        self::$tabs[$id] = ['title' => $title, 'url' => $url];
    }

    public static function getTabs() : array
    {
        return self::$tabs;
    }
}
