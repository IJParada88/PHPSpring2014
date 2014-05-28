<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passcode
 *
 * @author 000806689
 */
class Passcode {
    //put your code here
    
    private $passcode;
    
    function __construct() {
        $this->setPasscode(filter_input(INPUT_POST, 'passcode'));
    }

    public function getPasscode() {
        return $this->passcode;
    }

    public function setPasscode($passcode) {
        $this->passcode = $passcode;
    }

    public function isValidPasscode(){    
        return ($this->getPasscode() === Config::PASS_CODE ? true : false);
    }
    
}
