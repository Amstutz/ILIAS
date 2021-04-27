<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Scope\Content\Inner\Factory;

use ILIAS\GlobalScreen\Identification\IdentificationInterface;
use ILIAS\GlobalScreen\Scope\isGlobalScreenItem;
use Closure;

/**
 * Class InnerContent
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class InnerContent implements isGlobalScreenItem
{

    /**
     * @var IdentificationInterface
     */
    protected $identification;
    /**
     * @var Closure
     */
    protected $component_decorator;

    /**
     * InnerContent constructor.
     * @param IdentificationInterface $identification
     */
    public function __construct(IdentificationInterface $identification)
    {
        $this->identification = $identification;
    }

    public function getProviderIdentification() : IdentificationInterface
    {
        return $this->identification;
    }

    public function addComponentDecorator(Closure $component_decorator) : isGlobalScreenItem
    {
        $this->component_decorator = $component_decorator;
    }

    public function getComponentDecorator() : ?Closure
    {
        return $this->component_decorator;
    }

}
