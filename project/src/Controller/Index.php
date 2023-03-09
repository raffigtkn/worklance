<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Index{

    public function index():Response{
        $number = random_int(0,100);
        return new Response(
            '<p>'.$number.'</p>'
        );
    }

}