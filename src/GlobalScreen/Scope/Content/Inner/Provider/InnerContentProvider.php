<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Scope\Content\Inner\Provider;

use ILIAS\UI\Component\Legacy\Legacy;

/**
 * Interface InnerContentProvider
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
interface InnerContentProvider
{
    public function getInnerContent() : Legacy;
}
