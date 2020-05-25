<?php
namespace App;

use \App\Providers\ValidationProvider;

class Checker{
    private $result;
    private ValidationProviderFactory;

    public function process($country, $item){
        $this->validate($country, $number);
    }

    private function validate($country, $number){
        $VP = ValidationProviderFactory.newValidationProvider($country);
    }

    public function result(){
        return $this->result;
    }

}