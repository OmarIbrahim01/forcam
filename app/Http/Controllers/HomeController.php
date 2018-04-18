<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    public function productsAll()
    {
        return view('products.all');
    }

    public function contact()
    {
        return view('about.contact');
    }

    public function whoWeAre()
    {
        return view('about.who_we_are');
    }
}
