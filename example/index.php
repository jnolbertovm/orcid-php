<?php

require "./vendor/autoload.php";

use Jnvm\Orcid\Model\Address;
use Jnvm\Orcid\Xml\Builder\AddressBuilder;

$address = new Address();
$address->setCountry("PE");

$twig = new AddressBuilder([
    "cache" => dirname(__FILE__).DIRECTORY_SEPARATOR."cache"
]);

$xml = $twig->build($address);

echo "<pre>";
print_r($xml);
