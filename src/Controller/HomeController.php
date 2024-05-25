<?php

namespace App\Controller;


use http\Env\Response;

class HomeController
{

    public function home()
    {
        $name = 'Andrii';

        return new Response('moin');
    }
}
