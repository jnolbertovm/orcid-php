<?php

namespace Jnvm\Orcid\Xml\Builder;

use Jnvm\Orcid\Model\ModelInterface;
use Jnvm\Orcid\Xml\XmlInterface;
use Jnvm\Orcid\Xml\XmlBuilder;

/**
 * class AddressBuilder
 * @package Jnvm\Orcid\Xml\Builder
 */
class AddressBuilder extends XmlBuilder implements XmlInterface
{
    public function build(ModelInterface $model)
    {
        $template = "address".$model->getVersion().".xml.twig";

        return $this->render($template, $model);
    }
}
