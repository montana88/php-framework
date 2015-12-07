<?php

class Home extends controller {

    public function index($name = '', $mood = '', $age = '') {

        $user = $this->model('User');
        $user->name = $name;
        $user->mood = $mood;
        $user->age = $age;

        $this->view('home/index', array(
            'name' => $user->name,
            'mood' => $user->mood,
            'age' => $user->age
        ));

    }

}