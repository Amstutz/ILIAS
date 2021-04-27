<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Scope\Content\Inner\Factory;

use ILIAS\GlobalScreen\Identification\IdentificationInterface;

/**
 * Class InnerContentFactory
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class InnerContentFactory
{
    public function innerContent(IdentificationInterface $i) : InnerContent
    {
        return new InnerContent($i);
    }
}
