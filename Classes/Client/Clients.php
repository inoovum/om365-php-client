<?php
namespace SteinbauerIT\OM365Client\Client;

/*
 * This file is part of the SteinbauerIT.OM365Client package.
 */

use Neos\Flow\Annotations as Flow;

class Clients extends Client
{

    /**
     * @return array
     */
    public function findAll():array
    {
        return $this->curl->get('client');
    }

    /**
     * @param string $identifier
     * @return array
     */
    public function findByIdentifier(string $identifier):array
    {
        return $this->curl->get('client/' . $identifier);
    }

}
