<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function register()
    // {
    //     return view('auth.register');
    // }



    public function done()
    {
        return view('auth.done');
    }

    public function thanks()
    {
        return view('auth.thanks');
    }

    public function menu1()
    {
        return view('auth.menu1');
    }

    public function menu2()
    {
        return view('auth.menu2');
    }

    // public function shop_all()
    // {
    //     return view('auth.shop_all');
    // }
}
