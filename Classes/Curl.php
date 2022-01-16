<?php
namespace SteinbauerIT\OM365Client;

/*
 * This file is part of the SteinbauerIT.OM365Client package.
 */

use Neos\Flow\Annotations as Flow;

class Curl
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
     * @param string $endpoint
     * @return array
     */
    public function get(string $endpoint):array
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sit.om365.at/api/' . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic ' . $this->settings['apiKey']
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response, true);
    }


}
