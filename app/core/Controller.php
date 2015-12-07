<?php

class Controller {

    public function model($model){

        require_once '../app/models/' . $model  . '.php';
        return new $model();

    }

    public function view($view, $data = array()){

        require_once '../app/views/' . $view . '.php';

    }

    public function redirect($url)
    {

        // Check whether the URL is set
        if (!$url) {
            // URL not set

            // Use current request URL
            $url = $_SERVER['REQUEST_URI'];

        }

        // Redirect
        \header('Location: ' . $url, 302);

        // Exit
        exit;

    }

}