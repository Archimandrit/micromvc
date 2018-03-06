<?php
require_once 'app/models/User.php';
require_once 'app/components/Weather.php';
class Controller

{

    public function homeAction()
    {
        $user = new User();
        $user->setFirstname('Knuckes');
        $user->setLastname('Ugandah');
        $this->render('home.php', 'Главная', [
            'user' => $user,
        ]);
    }

    public function regAction()
    {
        $param = $_POST;
        $user = new User();
        if ( isset($param['is_agree']) ) {
            $user->setFirstname($param['Iban']);
            $user->setLastname($param['pod']);
            $user->setPassword($param['password']);
            $user->setAge($param['age']);
            $user->setSex($param['sex']);
            $user->setGrowth($param['growth']);
            if (isset($param['stack_learn'])){
                $user->setStackLearn($param['stack_learn']);
            }

    }

        $this->render('reg.php', 'Регистрация', [
            'user' => $user,
            ]);
    }



    private function render($view, $title, $param = []){
        extract($param);
        require_once 'templates/layout.php';
    }

    public function route($route){
        return '/micromvc/?act='.$route;
    }

    public function weatherAction()
    {
        $city = 'Saint Petersburg,ru';
        $weather = new Weather('012e34537b328a78762f56bb13b7ac8c');
        $this->render('weather.php', 'Погода', [
            'weatherByCity' => $weather->getWeatherByCity($city),
    ]);
    }
}