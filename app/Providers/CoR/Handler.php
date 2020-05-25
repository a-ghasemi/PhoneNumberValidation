<?php

namespace App/Providers/CoR;

interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function validate();
}