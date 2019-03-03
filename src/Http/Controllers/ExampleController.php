<?php

namespace Example\Http\Controllers;

use Illuminate\Routing\Controller;

class ExampleController extends Controller
{
    /**
     * Example welcome.
     * 
     * @return Illuminate\Http\Response;
     */
    public function welcome()
    {
        return view('example::layout');
    }
}
