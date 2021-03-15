<?php

namespace ILIAS\UI\Component\Layout\Content\Outer;

use ILIAS\UI\Component\MainControls;
use ILIAS\UI\Component\Image\Image;
use ILIAS\UI\Component\Breadcrumbs\Breadcrumbs;

/**
 * This is what a factory for pages looks like.
 */
interface Factory
{
    /**
     * ---
     * description:
     *   purpose: >
     *   composition: >
     * rules:
     *   usage:
     *     1:
     * ----
     * @return \ILIAS\UI\Component\Layout\Content\Outer\Standard
     */
    public function standard() : Standard;
}
