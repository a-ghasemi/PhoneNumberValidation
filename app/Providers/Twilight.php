<?php

namespace App\Providers;

class Twilight implements ValidationProvider extends CoR/AbstractHandler{
    private $url = "url2/look/";
    private $http_method = "GET";

    public function validate(){
        return true;
    }

    public function handle(string $request)
    {
        if ($request === "Twilight") {
            return "Twilight: {$request} |";
        } else {
            return parent::handle($request);
        }
    }
}