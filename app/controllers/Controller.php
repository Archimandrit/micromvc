<?php
require_once 'app/models/User.php';
abstract class Controller

{
    public function render($view, $title, $param = [])
    {
        extract($param);
        require_once 'templates/layout.php';
    }

    public function route($route)
    {
        return '?act=' . $route;
    }
}