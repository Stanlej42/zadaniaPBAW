<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

use Smarty\Smarty;

class CalcCtrl {
    private $messages;
    private $form;
    private $result;

    public function __construct() {
        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST ['amount'] : null;
        $this->form->interest = isset($_REQUEST['interest']) ? $_REQUEST ['interest'] : null;
        $this->form->years = isset($_REQUEST['years']) ? $_REQUEST ['years'] : null;
    }

    public function validate() {
        if (!(isset($this->form->amount) && isset($this->form->interest) && isset($this->form->years))) {
            return false;
        }

        if ($this->form->amount == "") {
            $this->messages->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->interest == "") {
            $this->messages->addError('Nie podano oprocentowania');
        }
        if ($this->form->years == "") {
            $this->messages->addError('Nie podano okresu kredytu');
        }

        if ($this->messages->isError()) return false; 
        
        if (!is_numeric($this->form->amount)) {
            $this->messages->addError('Kwota nie jest liczbą');
        }
        if (!is_numeric($this->form->interest)) {
            $this->messages->addError('Oprocentowanie nie jest liczbą');
        }	
        if (!is_numeric($this->form->years)) {
            $this->messages->addError('Okres kredytu nie jest liczbą');
        }
        
        if($this->messages->isError()) return false;

        if ($this->form->amount <= 0) {
            $this->messages->addError("Kwota musi być większa od zera");
        }
        if ($this->form->interest < 0) {
            $this->messages->addError("Oprocentowanie musi być większe lub równe zeru");
        }
        if ($this->form->years <= 0) {
            $this->messages->addError("Okres kredytu musi być większy od zera");
        }
        
        return !$this->messages->isError();
    }

    public function generateView() {
        global $conf;
        $smarty = new Smarty();

        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Kalkulator kredytowy');
        $smarty->assign('page_description', 'Profesjonalny kalkulator kredytowy');
        $smarty->assign('page_header', 'Kalkulator kredytowy');

        $smarty->assign('form', $this->form);
        $smarty->assign('result', $this->result);
        $smarty->assign('messages', $this->messages);

        $smarty->display($conf->root_path.'/app/CalcView.html');
    }

    public function process() {
        $this->getParams();
        if($this->validate()) {
            $this->messages->addInfo('Poprawne parametry');

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