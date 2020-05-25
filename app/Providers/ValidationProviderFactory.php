<?php

namespace App/Providers;

abstract class ValidationProviderFactory{
    public function newValidationProvider($country){
        $BirdPower = new BirdPower();
        $Twilight = new Twilight();
        $HobbiTel = new HobbiTel();

        switch($country){
            case 'Dutch': //+31
                return $HobbiTel->setNext($BirdPower)->setNext($Twilight);
            break;
            
            case 'Australian': //+61
                return $BirdPower->setNext($Twilight)->setNext($HobbiTel);
            break;

            default: //Otherwise
                return $BirdPower->setNext($HobbiTel)->setNext($Twilight);

        }
    }
}