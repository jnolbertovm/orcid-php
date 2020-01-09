<?php

namespace Jnvm\Orcid\Model;

use Jnvm\Orcid\Model\ModelInterface;

/**
 * class Common
 * @package Jnvm\Orcid\Model
 */
class Common implements ModelInterface
{
    /**
     * @var string
     */
    protected $version = "3.0";

    /**
     * function getVersion
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * function setVersion
     *
     * @param string $version
     * @return void
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }
}
