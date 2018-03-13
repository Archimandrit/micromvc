<?php


class Weather
{
    const API_URL = 'http://api.openweathermap.org/data/2.5/weather';
    const CACHE_DIR = 'weather';
    private $apiKey;

    private function __construct($apiKey)
    {
     $this->apiKey = $apiKey;
    }

    public function getWeatherByCity($city = 'Saint Petersburg,ru', $cache = false)
    {
    $param=[
        'q' => $city,
        'appid' => $this->apiKey,
    ];
    $url = self::API_URL.'?'. http_build_query($param);
        return $this->getResponse($url, $cache);
    }

    public function getWeatherByCoordinates()
    {

    }

    private function getResponse($url, $cache = false)
    {
        if ($cache){
            return ($url);
        }
        $result= File::getCache($url, self::CACHE_DIR);
        return json_decode($result, true);
    }


}