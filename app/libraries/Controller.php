<?php

class Controller
{

    public function loadModel($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function loadView($view, $data = [])
    {
        if (file_exists('../public/views/' . $view . '.php')) {
            require_once '../public/views/' . $view . '.php';
        } else {
            die('View does not exists');
        }
    }
}
