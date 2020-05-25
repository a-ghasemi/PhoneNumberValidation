<?php

namespace App\Providers;

abstract class AbstractValidationProvider implements ValidationProvider
{
    private $url;
    private $http_method;

    public function validate()
    {
        while(!$this->check_timeout()){
            //
        }
        return parent::handle();
    }

    private function check_timeout(){
        return true;
    }
}