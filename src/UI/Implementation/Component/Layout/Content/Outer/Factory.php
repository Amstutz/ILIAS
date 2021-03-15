<?php

namespace ILIAS\UI\Implementation\Component\Layout\Content\Outer;

use ILIAS\UI\Component\Layout\Content\Outer;

class Factory implements Outer\Factory
{
    /**
     * @inheritdoc
     */
    public function standard() : Outer\Standard
    {
        return new Standard();
    }
}
