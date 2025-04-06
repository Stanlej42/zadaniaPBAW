<?php

namespace app\controllers;

class LandingCtrl {
    public function generateView() {
        getSmarty()->assign('page_title', 'Witaj!');
        getSmarty()->assign('page_description', '');
        getSmarty()->assign('page_header', 'Kalkulator kredytowy');

        getSmarty()->display('LandingView.html');
    }
}