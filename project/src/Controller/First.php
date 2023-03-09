<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class First{

    public function index():Response{
        $number = random_int(0,100);
        return new Response(
            '<p>first</p>'
        );
    }

}