<?php

namespace Jnvm\Orcid\Model;

/**
 * interface ModelInterface
 * @package Jnvm\Orcid\Model
 */
interface ModelInterface
{
    /**
     * function getVersion
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * function setVersion
     *
     * @param string $version
     * @return string
     */
    public function setVersion(string $version);
}
