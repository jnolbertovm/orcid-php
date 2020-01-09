<?php

namespace Jnvm\Orcid\Model;

use Jnvm\Orcid\Model\Common;

/**
 * class Address
 * @package Jnvm\Orcid\Model
 */
class Address extends Common
{
    /**
     * @var string
     */
    private $country;

    /**
     * function getCountry
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * function setCountry
     *
     * @param string $country
     * @return void
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }
}
