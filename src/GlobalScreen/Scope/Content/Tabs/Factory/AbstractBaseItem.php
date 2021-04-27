<?php declare(strict_types=1);

namespace ILIAS\GlobalScreen\Scope\Content\Tabs\Factory;

use ILIAS\Data\URI;
use ILIAS\GlobalScreen\Scope\isGlobalScreenItem;
use Closure;
use ILIAS\GlobalScreen\Identification\IdentificationInterface;

/**
 * Class AbstractBaseItem
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
abstract class AbstractBaseItem implements isTab
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
     * @var string
     */
    protected $title = '';
    /**
     * @var URI
     */
    protected $uri;

    /**
     * AbstractBaseItem constructor.
     * @param IdentificationInterface $identification
     * @param string                  $title
     * @param URI                     $uri
     */
    public function __construct(IdentificationInterface $identification, string $title, URI $uri = null)
    {
        $this->identification = $identification;
        $this->title = $title;
        //$this->uri = $uri ?? new URI('#');
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

    public function withTitlte(string $title) : isTab
    {
        $clone = clone $this;
        $clone->title = $title;

        return $clone;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function withURI(URI $uri) : isTab
    {
        $clone = clone $this;
        $clone->uri = $uri;

        return $clone;
    }

    public function getURI() : URI
    {
        return $this->uri;
    }

}
