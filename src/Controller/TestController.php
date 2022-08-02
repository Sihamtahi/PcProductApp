<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{

    public function index()
    {
        dd("9a fonctionne");
    }

    /**
     * @Route("/test/age</d+>?0", name = "test", methods={GET, POST})
     */
    public function test(Request $request, $age)
    {

        //$request = Request::createFromGlobals();
        //$age = $request->attributes->get('age');
        return new Response("Vous avez $age ans !");
    }
}
// $age = 0;
        // if (!empty($_GET['age'])) {
        //     $age = $_GET['age']; // les superGlobal _GET _POST ...
        // }

        // dd("Aqli deg Test et vous avez $age ans ");