<?php

namespace ILIAS\UI\Component\Layout\Content;

/**
 * This is what a factory for pages looks like.
 */
interface Factory
{
    /**
     * ---
     * description:
     *   purpose: >
     *
     *
     *   composition: >
     *
     *
     *
     * rules:
     *   usage:
     *     1:
     * ----
     *
     * @param  \ILIAS\UI\Component\Component[] $content
     * @return \ILIAS\UI\Component\Layout\Content\Outer\Factory
     */
    public function outer() : Outer\Factory;
}
