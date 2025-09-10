<?php

namespace App\Controllers;

class Test extends COntroller {


    public function index()
    {
        $response  = $this->view->render("test/index");
        if (!empty ($response)) {
            echo 'Saya juga gak tau';
        }
    }
}