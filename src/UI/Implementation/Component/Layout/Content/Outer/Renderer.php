<?php

namespace ILIAS\UI\Implementation\Component\Layout\Content\Outer;

use ILIAS\UI\Implementation\Render\AbstractComponentRenderer;
use ILIAS\UI\Renderer as RendererInterface;
use ILIAS\UI\Component;
use ILIAS\UI\Implementation\Render\ilTemplateWrapper as UITemplateWrapper;
use ILIAS\UI\Component\Signal;
use ILIAS\UI\Component\Image\Image;

class Renderer extends AbstractComponentRenderer
{
    /**
     * @inheritdoc
     */
    public function render(Component\Component $component, RendererInterface $default_renderer)
    {
        $this->checkComponent($component);

        if ($component instanceof Component\Layout\Content\Outer\Standard) {
            return $this->renderStandardOuterContent($component, $default_renderer);
        }
    }

    protected function renderStandardOuterContent(
        Component\Layout\Content\Outer\Standard $component,
        RendererInterface $default_renderer
    ) {
        $tpl = $this->getTemplate("tpl.standardconentouter.html", true, true);

        if ($component->getTitle()) {
            $tpl->setCurrentBlock("headerbl");
            $tpl->setVariable("HEADER", $component->getTitle());
            $tpl->parseCurrentBlock();
        }
        if ($component->getContent()) {
            $tpl->setVariable("CONTENT_INNER", $default_renderer->render($component->getContent()));
        }

        return $tpl->get();
    }

    /**
     * @inheritdoc
     */
    protected function getComponentInterfaceName()
    {
        return array(
            Component\Layout\Content\Outer\Standard::class
        );
    }
}
