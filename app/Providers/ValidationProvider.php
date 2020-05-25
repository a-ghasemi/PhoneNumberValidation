<?php 
namespace App\Providers;

abstract class ValidationProvider{
    private $url;
    private $http_method;

    public function validate()
    {
        while(!$this->check_timeout()){
            //
        }
        return parent::handle($request);
    }

    private function check_timeout(){
        return true;
    }
}