<?php namespace ILIAS\GlobalScreen\Scope\MetaBar\Provider;

use ILIAS\GlobalScreen\Provider\AbstractProvider;
use ILIAS\GlobalScreen\Scope\Content\Tabs\Provider\TabProvider;
use ILIAS\DI\Container;
use ILIAS\GlobalScreen\Scope\Content\Tabs\Factory\TabItemFactory;
use ILIAS\GlobalScreen\Identification\IdentificationFactory;

/**
 * Interface AbstractTabProvider
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
abstract class AbstractTabProvider extends AbstractProvider implements TabProvider
{
    /**
     * @var TabItemFactory
     */
    protected $factory;
    /**
     * @var IdentificationFactory
     */
    protected $if;

    public function __construct(Container $dic)
    {
        parent::__construct($dic);
        $this->factory = $dic->globalScreen()->content()->tabs();
        $this->if = $dic->globalScreen()->identification()->core($this);
    }

}
