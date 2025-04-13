<?php

namespace app\controllers;

class StaticCtrl {
    public function action_formula() {
        getSmarty()->assign('page_title', 'Wzór obliczeń');
        getSmarty()->assign('page_description', 'Wzór wykorzystywany do obliczania raty kredytu');
        getSmarty()->assign('page_header', 'Kalkulator kredytowy');

        getSmarty()->display('FormulaView.html');
    }

    public function action_landing() {
        getSmarty()->assign('page_title', 'Witaj!');
        getSmarty()->assign('page_description', '');
        getSmarty()->assign('page_header', 'Kalkulator kredytowy');

        getSmarty()->display('LandingView.html');
    }
}