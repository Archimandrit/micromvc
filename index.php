<?php

require_once 'app/controllers/Controller.php';

define('PROJECT_NAME', 'skillUp');

$query = $_GET;
$method = null;
if (isset ($query['act'])) {
    $method = $query['act']. 'Action';
}

$controllers = new Controller();
if ($method && method_exists($controllers, $method)){
    // Метод точно есть
    $controllers->{$method}();
} else {
    $controllers->homeAction();
}
