<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Scope\Content\Tabs\Factory;

use ILIAS\GlobalScreen\Identification\IdentificationInterface;
use ILIAS\Data\URI;

/**
 * Class TabItemFactory
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class TabItemFactory
{
    public function link(IdentificationInterface $i, string $title, URI $uri = null) : isTab
    {
        return new Link($i, $title, $uri);
    }
}
