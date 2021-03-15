<?php

namespace ILIAS\UI\Implementation\Component\Layout\Content\Outer;

use ILIAS\UI\Component\Layout\Content\Outer;
use ILIAS\UI\Implementation\Component\ComponentHelper;
use ILIAS\UI\Implementation\Component\JavaScriptBindable;

/**
 * Page
 */
class Standard implements Outer\Standard
{
    use ComponentHelper;
    use JavaScriptBindable;

    /**
     * @var \ILIAS\UI\Component\Component[]
     */
    protected $content;

    /**
     * @var string
     */
    protected $title;

    public function __construct()
    {
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function withTitle(string $title)
    {
        $clone = clone $this;
        $clone->title = $title;
        return $clone;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function withContent(array $components) : Outer\Standard
    {
        $allowed = [\ILIAS\UI\Component\Component::class];
        $this->checkArgListElements("content", $components, $allowed);

        $clone = clone $this;
        $clone->content = $components;
        return $clone;
    }
}
