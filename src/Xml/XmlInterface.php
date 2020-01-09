<?php

namespace Jnvm\Orcid\Xml;

use Jnvm\Orcid\Model\ModelInterface;

interface XmlInterface
{
    /**
     * Create file for document.
     *
     * @param ModelInterface $model
     *
     * @return string Content File
     */
    public function build(ModelInterface $model);
}
