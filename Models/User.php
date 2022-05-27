<?php
class User {
    public $name;
    public $userLogged;
    public $cardMonth;
    public $cardYear;
    public $cardControl;
    function __construct(String $name, Bool $userLogged, String $cardMonth, String $cardYear) {
        $this->name = $name;
        $this->userLogged = $userLogged;
        $this->cardMonth = $cardMonth;
        $this->cardYear = $cardYear;
        $this->cardControl();
    }
    public function cardControl() {
        $month = date('m');
        $year = date('y');
        if ($this->cardMonth > $month && $this->cardYear >= $year) {
            var_dump('puoi pagare');
            $this->cardControl = true;
        } else {
            var_dump('pagamento rifiutato, carta scaduta');
            $this->cardControl = false;
        }

    }
}
