<?php

namespace ILIAS\UI\Component\Layout;

/**
 * This is what a factory for layouts looks like.
 */
interface Factory
{
    /**
     * ---
     * description:
     *   purpose: >
     *     The Page is the user's view upon ILIAS in total.
     *
     * ----
     *
     * @return  \ILIAS\UI\Component\Layout\Page\Factory
     */
    public function page() : Page\Factory;

    /**
     * ---
     * description:
     *   purpose: >
     *
     * ----
     *
     * @return  \ILIAS\UI\Component\Layout\Content\Factory
     */
    public function content() : Content\Factory;
}
