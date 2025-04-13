<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
    private $form;
    private $result;

    public function __construct() {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->amount = getFromRequest('amount');
        $this->form->interest = getFromRequest('interest');
        $this->form->years = getFromRequest('years');
    }

    public function validate() {
        if (!(isset($this->form->amount) && isset($this->form->interest) && isset($this->form->years))) {
            return false;
        }

        if ($this->form->amount == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->interest == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        if ($this->form->years == "") {
            getMessages()->addError('Nie podano okresu kredytu');
        }

        if (getMessages()->isError()) return false; 
        
        if (!is_numeric($this->form->amount)) {
            getMessages()->addError('Kwota nie jest liczbą');
        }
        if (!is_numeric($this->form->interest)) {
            getMessages()->addError('Oprocentowanie nie jest liczbą');
        }	
        if (!is_numeric($this->form->years)) {
            getMessages()->addError('Okres kredytu nie jest liczbą');
        }
        
        if(getMessages()->isError()) return false;

        if ($this->form->amount <= 0) {
            getMessages()->addError("Kwota musi być większa od zera");
        }
        if ($this->form->interest < 0) {
            getMessages()->addError("Oprocentowanie musi być większe lub równe zeru");
        }
        if ($this->form->years <= 0) {
            getMessages()->addError("Okres kredytu musi być większy od zera");
        }
        
        return !getMessages()->isError();
    }

    public function generateView() {
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('page_description', 'Oblicz ratę swojego kredytu');
        getSmarty()->assign('page_header', 'Kalkulator kredytowy');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);

        getSmarty()->display('CalcView.html');
    }

    public function action_calcCompute() {
        $this->getParams();
        if($this->validate()) {
            getMessages()->addInfo('Poprawne parametry');

            $this->form->amount = round(floatval($this->form->amount), 2);
            $this->form->interest = floatval($this->form->interest);
            $this->form->years = intval($this->form->years);

            $this->result->monthly_installment = 
                ($this->form->amount + $this->form->amount * $this->form->interest / 100 * $this->form->years) 
                    / ($this->form->years * 12);
            $this->result->monthly_installment = round($this->result->monthly_installment, 2);
        }
        $this->generateView();
    }
}