<?php

namespace app\controllers;

class FormulaCtrl {
    public function generateView() {
        getSmarty()->assign('page_title', 'Wzór obliczeń');
        getSmarty()->assign('page_description', 'Wzór wykorzystywany do obliczania raty kredytu');
        getSmarty()->assign('page_header', 'Kalkulator kredytowy');

        getSmarty()->display('FormulaView.html');
    }
}