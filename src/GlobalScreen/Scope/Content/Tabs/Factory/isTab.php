<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Scope\Content\Tabs\Factory;

use ILIAS\GlobalScreen\Scope\isGlobalScreenItem;
use ILIAS\Data\URI;

/**
 * Interface isTab
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
interface isTab extends isGlobalScreenItem
{
    public function withTitlte(string $title) : isTab;

    public function getTitle() : string;

    public function withURI(URI $uri) : isTab;

    public function getURI() : URI;
}
