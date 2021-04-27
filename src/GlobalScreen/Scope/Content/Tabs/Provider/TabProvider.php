<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Scope\Content\Tabs\Provider;

use ILIAS\GlobalScreen\Provider\Provider;
use ILIAS\GlobalScreen\Scope\Content\Tabs\Factory\isTab;

/**
 * Interface TabProvider
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
interface TabProvider extends Provider
{
    /**
     * @return isTab[]
     */
    public function getMainTabs() : array;

    public function getSubTabs() : array;
}
