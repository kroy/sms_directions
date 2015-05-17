<?php

class GmapsRequest {
    const BASE_API_URL = 'https://maps.googleapis.com/maps/api/directions/';
    const OUTPUT_TYPE_JSON = 'json';
    const OUTPUT_TYPE_XML = 'xml';

    private $origin;
    private $destination;
    private $output_type = self::OUTPUT_TYPE_JSON;

    function __construct() {

    }

    public function send() {
        if (!$this->isValidRequest()) {
            return false;
        }
        $url = $this->getUrl();
        $handle = curl_init($url);

        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($handle);

        curl_close($handle);

        return $result;
    }

    public function setOrigin($origin) {
        // validate input
        $this->origin = $origin;
    }

    public function setDestination($destination) {
        $this->destination = $destination;
    }

    public function setOutputJson() {
        $this->output_type = self::OUTPUT_TYPE_JSON;
    }

    public function setOutputXml() {
        $this->output_type = self::OUTPUT_TYPE_XML;
    }

    private function getUrl() {
        return 'https://www.google.com';
    }

    private function getApiKey() {
        return 'hello';
    }

    private function isValidRequest() {
        return true;
    }
}