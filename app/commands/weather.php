<?php
require_once '../components/File.php';
require_once '../components/Weather.php';

$city = 'Saint Petersburg,ru';
$weather = new Weather('012e34537b328a78762f56bb13b7ac8c');
$weather->getWeatherByCity($city, $cache = true);
/// Получение погоды
$data = @file_get_contents($url);
File::cache($data,$url,Weather::CACHE_DIR);
