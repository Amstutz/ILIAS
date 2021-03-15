<?php

namespace ILIAS\UI\Implementation\Component\Layout\Content;

use ILIAS\UI\Component\Layout\Content;

class Factory implements Content\Factory
{
    /**
     * @inheritdoc
     */
    public function outer() : Content\Outer\Factory
    {
        return new Outer\Factory();
    }
}
