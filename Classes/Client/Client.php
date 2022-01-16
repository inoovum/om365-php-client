<?php
namespace SteinbauerIT\OM365Client\Client;

/*
 * This file is part of the SteinbauerIT.OM365Client package.
 */

use Neos\Flow\Annotations as Flow;


class Client
{

    /**
     * @var array
     */
    protected $settings;

    /**
     * @param array $settings
     * @return void
     */
    public function injectSettings(array $settings) {
        $this->settings = $settings;
    }

    /**
     * @Flow\Inject
     * @var \SteinbauerIT\OM365Client\Curl
     */
    protected $curl;

}
