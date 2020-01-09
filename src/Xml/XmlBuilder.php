<?php

namespace Jnvm\Orcid\Xml;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * class XmlBuilder
 * @package Jnvm\Orcid\Xml
 */
class XmlBuilder
{
    /**
     * @var \Twig_Environment
     */
    public $twig;

    /**
     * TwigBuilder constructor.
     * @param array $options [optional] Recommended: 'cache' => '/dir/cache'
     */
    public function __construct(array $options)
    {
        $this->initTwig($options);
    }

    /**
     * Get Content XML from template.
     *
     * @param string|TemplateWrapper $template
     * @param object $model
     * @return string
     */
    public function render(string $template, $model): string
    {
        return $this->twig->render($template, [
            'model' => $model,
        ]);
    }

    /**
     * function initTwig
     *
     * @param array $options
     * @return void
     */
    private function initTwig(array $options)
    {
        $loader = new FilesystemLoader(__DIR__.'/Templates');
        $twig = new Environment($loader, $options);
        $this->twig = $twig;
    }
}
