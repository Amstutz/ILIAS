<?php

namespace ILIAS\UI\Component\Layout\Content\Outer;

use ILIAS\UI\Component\Component;
use ILIAS\UI\Component\JavaScriptBindable;

/**
 * This describes the Page.
 */
interface Standard extends JavaScriptBindable, Component
{
    public function getTitle() : string;

    public function withTitle(string $title);

    /**
     * @return Component[]
     */
    public function getContent();

    /**
     * @param Component[] $components
     * @return Standard
     */
    public function withContent(array $components) : Standard;
}
