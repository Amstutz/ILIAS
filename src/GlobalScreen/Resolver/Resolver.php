<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Resolver;

use ILIAS\GlobalScreen\Provider\Provider;

/**
 * Interface Resolver
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
interface Resolver
{
    public function resolveProvider() : Provider;
}
