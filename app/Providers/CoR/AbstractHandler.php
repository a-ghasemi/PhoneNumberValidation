<?php
namespace App\Providers\CoR;

abstract class AbstractHandler implements Handler
{
    private $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function validate()
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle();
        }
        
        return null;
    }
}