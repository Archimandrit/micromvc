<?php


class Weather
{
    const API_URL = 'http://api.openweathermap.org/data/2.5/weather';

    private $apiKey;

    private function __construct($apiKey)
    {
     $this->apiKey = $apiKey;
    }

    public function getWeatherByCity($city = 'Saint Petersburg,ru')
    {
    $param=[
        'q' => $city,
        'appid' => $this->apiKey,
    ];
    $url = self::API_URL.'?'. http_build_query($param);
        return $this->getResponse($url);
    }

    public function getWeatherByCoordinates()
    {

    }

    private function getResponse($url)
    {
        $result = file_get_contents($url);
        return json_decode($result, true);
    }


}