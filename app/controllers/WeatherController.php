<?php

class WeatherController extends Controller
{
    public function weatherAction() {
        $city = 'Saint Petersburg,ru';
        $weather1 = null;
        try {
            $weather = new Weather('012e34537b328a78762f56bb13b7ac8c');
            $weather1 = $weather->getWeatherByCity($city);
        } catch (\Exception $e) {
            Session::addFlash(Session::FLASH_DANGER, $e->getMessage());
        }

        $this->render('weather.php', '������', [
            'weather1' => $weather1,
            //'weather2' => $weather->getWeatherByCoordinate(59.93863, 30.31413),
        ]);
    }

    public function testAction() {
        $user = new User();
        $user->setFirstname('����');
        $user->setLastname('����');

        $this->render('home.php', '����', [
            'user' => $user,
            'time' => time()+1245,
        ]);
    }
}