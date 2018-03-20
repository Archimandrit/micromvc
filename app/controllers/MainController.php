<?php


class MainController extends Controller
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
    public function weatherAction() {
        $city = 'Saint Petersburg,ru';
        $weather1 = null;
        try {
            $weather = new Weather('012e34537b328a78762f56bb13b7ac8c');
            $weather1 = $weather->getWeatherByCity($city);
        } catch (\Exception $e) {
           echo 'OSHIBKA';
        }

        $this->render('weather.php', 'Погода', [
            'weather1' => $weather1,
            //'weather2' => $weather->getWeatherByCoordinate(59.93863, 30.31413),
        ]);
    }
}