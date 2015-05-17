<?php

class Config {
	const API_INI_PATH = '../.api_keys.ini';

	public static function getApiKey() {
		$api_config =  parse_ini_file('../.api_keys.ini');
        return $api_config['google_directions_key'];
	}
}